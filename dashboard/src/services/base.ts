import {
	forEach, OApiAddJSON,
	OApiFiltersMap,
	OApiRequestOptions,
	OViewDialog,
	OWebFormValidator,
	OWebNet,
	OWebServiceStore
} from 'oweb';
import { GoblSinglePKEntity } from 'gobl-utils-ts';
import { computed, onMounted, readonly, Ref, ref, toRaw, watch } from 'vue';
import { i18n } from '@/utils/helpers';

const removeEmptyFiles = function(fd: FormData) {
	fd.forEach(function(val, name) {
		if (val instanceof Blob && !val.name && !val.size) {
			fd.delete(name);
		}
	});

	return fd;
};
export type AddHooks<T> = {
	onFormValidated?(fd: OWebFormValidator): void;
	onRequestCreated?(req: OWebNet<OApiAddJSON<T>>): void;
};
export type EditHooks<T> = {
	onFormValidated?(fd: OWebFormValidator): void;
	onRequestCreated?(req: OWebNet<OApiAddJSON<T>>): void;
};
export type DeleteHooks<T> = {
	confirm?(item: T): Promise<boolean>;
	onRequestCreated?(req: OWebNet<OApiAddJSON<T>>): void;
};

export default abstract class ServiceStore<
	T extends GoblSinglePKEntity
> extends OWebServiceStore<T> {
	abstract buildAddForm(): any;
	abstract buildEditForm(item: T): any;

	useAddForm(hooks: AddHooks<T> = {}) {
		const form = this.buildAddForm(),
			appCtx = this._appContext,
			sendForm = async (event: any) => {
				const formEl = event.target,
					ofv = appCtx.getFormValidator(
						formEl,
						form.required || [],
						form.excluded || [],
						false,
					);

				if (ofv.validate()) {
					hooks.onFormValidated && hooks.onFormValidated(ofv);

					const data = removeEmptyFiles(ofv.getFormData());

					appCtx.view.freeze();

					const req = this.addItemRequest(data);

					req.onFail(function(error) {
						appCtx.view.dialog(error);
					}).onFinish(function() {
						appCtx.view.unfreeze();
					});

					hooks.onRequestCreated && hooks.onRequestCreated(req);

					req.send();
				}
			};

		return { form, sendForm };
	}

	useEditForm(itemProvider: Ref<T>, hooks: EditHooks<T> = {}) {
		const form = computed(() => this.buildEditForm(itemProvider.value)),
			appCtx = this._appContext,
			id = computed(()=> itemProvider.value.singlePKValue()),
			sendForm = async (event: any) => {
				const formEl = event.target,
					ofv = appCtx.getFormValidator(
						formEl,
						form.value.required || [],
						form.value.excluded || [],
						false,
					);

				if (ofv.validate()) {
					hooks.onFormValidated && hooks.onFormValidated(ofv);

					const data = removeEmptyFiles(ofv.getFormData());

					appCtx.view.freeze();

					const req = this.updateRequest(id.value, data);

					req.onFail(function(error) {
						appCtx.view.dialog(error);
					}).onFinish(function() {
						appCtx.view.unfreeze();
					});

					hooks.onRequestCreated && hooks.onRequestCreated(req);

					req.send();
				}
			};

		return { id, form, sendForm };
	}

	useDeleteItem(
		hooks: DeleteHooks<T> = {
			confirm() {
				return new Promise((resolve) =>
					resolve(confirm(i18n('delete_confirm'))),
				);
			},
		},
	) {
		const busy = ref(false),
			error = ref<OViewDialog>(),
			result = ref() as Ref<OApiAddJSON<T>>;

		const deleteItem = async (item: T) => {
			if (busy.value) {
				return false;
			}

			if (hooks.confirm) {
				const confirmed = await hooks.confirm(item);

				if (!confirmed) {
					return false;
				}
			}

			busy.value = true;

			const req = this.deleteItemRequest(item);

			req.onGoodNews(function(response) {
				result.value = response.json;
			})
				.onFail(function(err) {
					error.value = err;
				})
				.onFinish(function() {
					busy.value = false;
				});

			hooks.onRequestCreated && hooks.onRequestCreated(req);

			return await req.send();
		};

		return {
			busy,
			error,
			result,
			deleteItem,
		};
	}

	useItemLoader() {
		const loading = ref(false),
			busy = ref(false),
			error = ref<OViewDialog>(),
			id = ref(''),
			relations = ref<string | string[]>(''),
			result = ref() as Ref<OApiAddJSON<T> | undefined>,
			item = computed<T | undefined>(() => {
				return result.value
					? result.value.data.item
					: this.identify(id.value, true);
			});

		const sendRequest = async (refresh = false) => {
				if (busy.value || !id.value || (item.value && !refresh)) {
					return false;
				}

				loading.value = busy.value = true;
				result.value = undefined;

				const req = this.getItemRequest(id.value);

				req.onGoodNews(function(response) {
					result.value = response.json;
				})
					.onFail(function(err) {
						error.value = err;
					})
					.onFinish(function() {
						loading.value = busy.value = false;
					});

				return await req.send();
			},
			refresh = async function() {
				return await sendRequest(true);
			};

		watch(id, async (a, b) => {
			if (a != b) {
				await refresh();
			}
		});

		return {
			loading,
			busy,
			error,
			relations,
			id,
			item,
			result,
			refresh,
		};
	}

	useItemListLoader() {
		const loading = ref(false),
			busy = ref(false),
			error = ref<OViewDialog>(),
			currentPage = ref(1),
			max = ref(10),
			requestData = ref<any>(),
			relations = ref<string | string[]>(''),
			collection = ref(''),
			orderBy = ref(''),
			filters = ref<OApiFiltersMap>({}),
			total = ref(0),
			totalPageCount = computed(() => Math.ceil(total.value / max.value)),
			requestOptions = computed<OApiRequestOptions>(() => {
				const opt: OApiRequestOptions = {
					data: requestData.value,
					max: max.value,
					filters: filters.value,
					collection: collection.value,
					relations: relations.value,
				};
				opt['order_by'] = orderBy.value;

				return opt;
			}),
			itemsPerPage = ref({}) as Ref<Record<string, T[]>>,
			items = computed(() => itemsPerPage.value[currentPage.value] || []),
			allItems = computed(() => {
				let all: T[] = [];

				forEach(itemsPerPage.value, function(items) {
					all = all.concat(toRaw(items));
				});

				return all;
			});

		const sendRequest = async (page: number) => {
				if (busy.value) {
					return false;
				}
				loading.value = busy.value = true;
				const options = requestOptions.value;
				const req = this.getItemsListRequest({
					...options,
					page,
				});

				req.onGoodNews(function(response) {
					const { data } = response.json;
					data.page && (currentPage.value = data.page);
					data.total && (total.value = data.total);
					itemsPerPage.value[currentPage.value] = data.items;
				})
					.onFail(function(err) {
						error.value = err;
					})
					.onFinish(function() {
						loading.value = busy.value = false;
					});

				return await req.send();
			},
			loadPage = async function(page: number, force = false) {
				if (force || currentPage.value !== page) {
					return await sendRequest(page);
				}

				return false;
			},
			refreshPage = async function() {
				return await loadPage(currentPage.value, true);
			},
			nextPage = async function() {
				if (currentPage.value < totalPageCount.value) {
					return await loadPage(currentPage.value + 1);
				}
				return false;
			},
			previewPage = async function() {
				if (currentPage.value > 1) {
					return await loadPage(currentPage.value - 1);
				}
				return false;
			};

		onMounted(() => loadPage(1, true));

		return {
			loading,
			busy,
			error,
			currentPage,
			requestData,
			filters,
			relations,
			collection,
			max,
			page: readonly(currentPage),
			total: readonly(total),
			totalPageCount,
			items,
			itemsPerPage: readonly(itemsPerPage),
			allItems,
			requestOptions,
			nextPage,
			previewPage,
			refreshPage,
			loadPage,
		};
	}
}
