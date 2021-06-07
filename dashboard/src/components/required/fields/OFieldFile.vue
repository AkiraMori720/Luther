<template>
	<div>
		<OLabel
			v-if="options.label"
			v-bind="options.label.attrs"
			:content="options.label.i18n"
		/>
		<div class="form-file">
			<input
				type="file"
				class="form-file-input"
				v-bind="options.attrs"
				@change="handleFileChange"
				:id="fieldId"
			/>
			<label class="form-file-label" :for="fieldId">
				<span class="form-file-text" v-i18n="fileTextI18n"></span>
				<span
					class="form-file-button"
					v-i18n="'form.field_file_browse'"
				></span>
			</label>
		</div>
	</div>
</template>

<script lang="ts">
import { defineComponent, ref, computed } from 'vue';
import OField from './OField';
import OLabel from './OLabel.vue';
import { i18n } from '@/utils/helpers';

export default defineComponent({
	components: { OLabel },
	name: 'OFieldFile',
	mixins: [OField],
	setup(props) {
		const fileTextI18n = ref('form.field_file_choose'),
			multiple = computed(() => (props.options.attrs || {}).multiple);

		return {
			fileTextI18n,
			multiple,
		};
	},
	methods: {
		handleFileChange(e: InputEvent) {
		  const element = e.target as HTMLInputElement;
			const files: FileList = (element && element.files) || new FileList(),
				count = files.length;

			if (count === 0) {
				this.fileTextI18n = 'form.field_file_choose';
			} else {
				const fileNames = [];
				for (let i = 0; i < count; i++) {
					fileNames[i] = files[i].name;
				}

				this.fileTextI18n = i18n(
					'form.field_file_n_chosen',
					{ n: count, name: fileNames.join(' , ') },
					count > 1 ? 1 : 0,
				);
			}

			this.handleValue(this.multiple ? files : files[0]);
		},
	},
});
</script>
