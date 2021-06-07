<?php

namespace DELIVERY\App\Handlers;

use DELIVERY\App\Db\DYCompany;
use DELIVERY\App\DYUtils;
use Gobl\CRUD\CRUDColumnUpdate;
use Gobl\CRUD\CRUDCreate;
use Gobl\CRUD\CRUDDelete;
use Gobl\CRUD\CRUDDeleteAll;
use Gobl\CRUD\CRUDRead;
use Gobl\CRUD\CRUDReadAll;
use Gobl\CRUD\CRUDUpdate;
use Gobl\CRUD\CRUDUpdateAll;



class DYCompaniesHandler extends BaseHandler
{
	/**
	 * @param \Gobl\CRUD\CRUDCreate $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeCreate(CRUDCreate $action)
	{
		$this->assertUserVerified();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDRead $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeRead(CRUDRead $action)
	{
		$this->assertUserVerified();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDUpdate $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeUpdate(CRUDUpdate $action)
	{
		$this->assertUserVerified();

		$action->setField(DYCompany::COL_UPDATE_TIME, \time());

		return true;
	}

	/**
	 * @param mixed $entity
	 *
	 * @throws \Exception
	 */
	public function onBeforeUpdateEntity($entity)
	{
		/**  @var DYCompany $entity */
		DYUtils::assertCompanyAccess($this->getContext(), $entity);
	}

	/**
	 * @param \Gobl\CRUD\CRUDDelete $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeDelete(CRUDDelete $action)
	{
		$this->assertUserVerified();

		return true;
	}

	/**
	 * @param mixed $entity
	 *
	 * @throws \Exception
	 */
	public function onBeforeDeleteEntity($entity)
	{
		/**  @var DYCompany $entity */
		DYUtils::assertCompanyAccess($this->getContext(), $entity);
	}

	/**
	 * @param \Gobl\CRUD\CRUDReadAll $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeReadAll(CRUDReadAll $action)
	{
		$this->assertUserVerified();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDUpdateAll $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeUpdateAll(CRUDUpdateAll $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDDeleteAll $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeDeleteAll(CRUDDeleteAll $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDColumnUpdate $action
	 *
	 * @return bool
	 * @throws \Exception
	 *
	 */
	public function onBeforeColumnUpdate(CRUDColumnUpdate $action)
	{
		return !in_array($action->getColumn()->getFullName(), [DYCompany::COL_OWNER_ID]);
	}

	/**
	 * @param array $form
	 *
	 * @throws \Throwable
	 */
	public function autoFillCreateForm(array &$form)
	{
		if (!isset($form[DYCompany::COL_OWNER_ID])) {
			$form[DYCompany::COL_OWNER_ID] = $this->getContext()
												  ->getUsersManager()
												  ->getCurrentUserId();
		}
	}
}
