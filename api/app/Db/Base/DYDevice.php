<?php

/**
 * Auto generated file
 *
 * WARNING: please don't edit.
 *
 * Proudly With: gobl v1.5.0
 * Time: 1622529633
 */


namespace DELIVERY\App\Db\Base;

use Gobl\ORM\ORM;
use Gobl\ORM\ORMEntityBase;
use DELIVERY\App\Db\DYDevicesQuery as DYDevicesQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;


/**
 * Class DYDevice
 */
abstract class DYDevice extends ORMEntityBase
{
	const TABLE_NAME = 'dy_devices';

	const COL_ID = 'dv_id';
	const COL_USER_ID = 'dv_user_id';
	const COL_OS = 'dv_os';
	const COL_APP = 'dv_app';
	const COL_KEY = 'dv_key';
	const COL_DATA = 'dv_data';
	const COL_ADD_TIME = 'dv_add_time';
	const COL_UPDATE_TIME = 'dv_update_time';
	const COL_VALID = 'dv_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_user;


	/**
	 * DYDevice constructor.
	 *
	 * @param bool $is_new true for new entity false for entity fetched
	 *                     from the database, default is true
	 * @param bool $strict Enable/disable strict mode
	 */
	public function __construct($is_new = true, $strict = true)
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			$is_new,
			$strict,
			self::TABLE_NAME,
			DYDevicesQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_devices` and `oz_users`.
	 *
	 * @return null|\OZONE\OZ\Db\OZUser
	 * @throws \Throwable
	 */
	public function getUser()
	{
		if (!isset($this->_r_user)) {
			$filters = [];
			if(!is_null($v = $this->getUserId())){
				$filters['user_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new OZUsersControllerRealR();
			$this->_r_user = $m->getItem($filters);
		}

		return $this->_r_user;
	}

	/**
	 * Getter for column `dy_devices`.`id`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getId()
	{
		$column = self::COL_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`id`.
	 *
	 * @param string $id
	 *
	 * @return static
	 */
	public function setId($id)
	{
		$column = self::COL_ID;
		$this->$column = $id;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`user_id`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getUserId()
	{
		$column = self::COL_USER_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`user_id`.
	 *
	 * @param string $user_id
	 *
	 * @return static
	 */
	public function setUserId($user_id)
	{
		$column = self::COL_USER_ID;
		$this->$column = $user_id;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`os`.
	 *
	 * @return string the real type is: string
	 */
	public function getOs()
	{
		$column = self::COL_OS;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`os`.
	 *
	 * @param string $os
	 *
	 * @return static
	 */
	public function setOs($os)
	{
		$column = self::COL_OS;
		$this->$column = $os;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`app`.
	 *
	 * @return string the real type is: string
	 */
	public function getApp()
	{
		$column = self::COL_APP;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`app`.
	 *
	 * @param string $app
	 *
	 * @return static
	 */
	public function setApp($app)
	{
		$column = self::COL_APP;
		$this->$column = $app;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`key`.
	 *
	 * @return string the real type is: string
	 */
	public function getKey()
	{
		$column = self::COL_KEY;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`key`.
	 *
	 * @param string $key
	 *
	 * @return static
	 */
	public function setKey($key)
	{
		$column = self::COL_KEY;
		$this->$column = $key;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`data`.
	 *
	 * @return string the real type is: string
	 */
	public function getData()
	{
		$column = self::COL_DATA;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`data`.
	 *
	 * @param string $data
	 *
	 * @return static
	 */
	public function setData($data)
	{
		$column = self::COL_DATA;
		$this->$column = $data;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`add_time`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getAddTime()
	{
		$column = self::COL_ADD_TIME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`add_time`.
	 *
	 * @param string $add_time
	 *
	 * @return static
	 */
	public function setAddTime($add_time)
	{
		$column = self::COL_ADD_TIME;
		$this->$column = $add_time;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`update_time`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getUpdateTime()
	{
		$column = self::COL_UPDATE_TIME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`update_time`.
	 *
	 * @param string $update_time
	 *
	 * @return static
	 */
	public function setUpdateTime($update_time)
	{
		$column = self::COL_UPDATE_TIME;
		$this->$column = $update_time;

		return $this;
	}

	/**
	 * Getter for column `dy_devices`.`valid`.
	 *
	 * @return bool the real type is: bool
	 */
	public function getValid()
	{
		$column = self::COL_VALID;
		$v = $this->$column;

		if( $v !== null){
			$v = (bool)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_devices`.`valid`.
	 *
	 * @param bool $valid
	 *
	 * @return static
	 */
	public function setValid($valid)
	{
		$column = self::COL_VALID;
		$this->$column = $valid;

		return $this;
	}

}
