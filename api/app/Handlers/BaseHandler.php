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
use OZONE\OZ\Core\CRUDHandler;



class BaseHandler extends CRUDHandler
{

	/**
	 * @param \Gobl\CRUD\CRUDCreate $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeCreate(CRUDCreate $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDRead $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeRead(CRUDRead $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDUpdate $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeUpdate(CRUDUpdate $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDDelete $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeDelete(CRUDDelete $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDReadAll $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeReadAll(CRUDReadAll $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDUpdateAll $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeUpdateAll(CRUDUpdateAll $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDDeleteAll $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeDeleteAll(CRUDDeleteAll $action)
	{
		$this->assertIsAdmin();

		return true;
	}

	/**
	 * @param \Gobl\CRUD\CRUDColumnUpdate $action
	 *
	 * @throws \Exception
	 *
	 * @return bool
	 */
	public function onBeforeColumnUpdate(CRUDColumnUpdate $action)
	{
		$this->assertIsAdmin();

		return true;
	}
}
