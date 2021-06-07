<?php

namespace DELIVERY\App\Handlers;

use Gobl\CRUD\CRUDColumnUpdate;
use Gobl\CRUD\CRUDCreate;
use Gobl\CRUD\CRUDDelete;
use Gobl\CRUD\CRUDDeleteAll;
use Gobl\CRUD\CRUDRead;
use Gobl\CRUD\CRUDReadAll;
use Gobl\CRUD\CRUDUpdate;
use Gobl\CRUD\CRUDUpdateAll;



class OZUsersHandler extends BaseHandler
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
		return true;
	}

	/**
	 * @param mixed $entity
	 *
	 * @throws \Exception
	 */
	public function onBeforeUpdateEntity($entity)
	{
		$um = $this->getContext()
				   ->getUsersManager();

		/*@var \OZONE\OZ\Db\OZUser $entity*/
		if ($entity->getId() !== $um->getCurrentUserId()) {
			$this->assertIsAdmin();
		} else {
			$this->assertUserVerified();
		}
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
		$this->assertIsAdmin();

		return true;
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
		return true;
	}

	public function autoFillCreateForm(array &$form)
	{
	}
}
