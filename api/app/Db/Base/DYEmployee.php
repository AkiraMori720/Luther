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
use DELIVERY\App\Db\DYEmployeesQuery as DYEmployeesQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;
use DELIVERY\App\Db\DYCompaniesController as DYCompaniesControllerRealR;


/**
 * Class DYEmployee
 */
abstract class DYEmployee extends ORMEntityBase
{
	const TABLE_NAME = 'dy_employees';

	const COL_ID = 'employee_id';
	const COL_USER_ID = 'employee_user_id';
	const COL_COMPANY_ID = 'employee_company_id';
	const COL_ROLE = 'employee_role';
	const COL_ACCESS = 'employee_access';
	const COL_DATA = 'employee_data';
	const COL_ADD_TIME = 'employee_add_time';
	const COL_UPDATE_TIME = 'employee_update_time';
	const COL_VALID = 'employee_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_user;

	/**
	 * @var \DELIVERY\App\Db\DYCompany
	 */
	protected $_r_company;


	/**
	 * DYEmployee constructor.
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
			DYEmployeesQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_employees` and `oz_users`.
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
	 * ManyToOne relation between `dy_employees` and `dy_companies`.
	 *
	 * @return null|\DELIVERY\App\Db\DYCompany
	 * @throws \Throwable
	 */
	public function getCompany()
	{
		if (!isset($this->_r_company)) {
			$filters = [];
			if(!is_null($v = $this->getCompanyId())){
				$filters['company_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYCompaniesControllerRealR();
			$this->_r_company = $m->getItem($filters);
		}

		return $this->_r_company;
	}

	/**
	 * Getter for column `dy_employees`.`id`.
	 *
	 * @return int the real type is: int
	 */
	public function getId()
	{
		$column = self::COL_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_employees`.`id`.
	 *
	 * @param int $id
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
	 * Getter for column `dy_employees`.`user_id`.
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
	 * Setter for column `dy_employees`.`user_id`.
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
	 * Getter for column `dy_employees`.`company_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getCompanyId()
	{
		$column = self::COL_COMPANY_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_employees`.`company_id`.
	 *
	 * @param int $company_id
	 *
	 * @return static
	 */
	public function setCompanyId($company_id)
	{
		$column = self::COL_COMPANY_ID;
		$this->$column = $company_id;

		return $this;
	}

	/**
	 * Getter for column `dy_employees`.`role`.
	 *
	 * @return string the real type is: string
	 */
	public function getRole()
	{
		$column = self::COL_ROLE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_employees`.`role`.
	 *
	 * @param string $role
	 *
	 * @return static
	 */
	public function setRole($role)
	{
		$column = self::COL_ROLE;
		$this->$column = $role;

		return $this;
	}

	/**
	 * Getter for column `dy_employees`.`access`.
	 *
	 * @return string the real type is: string
	 */
	public function getAccess()
	{
		$column = self::COL_ACCESS;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_employees`.`access`.
	 *
	 * @param string $access
	 *
	 * @return static
	 */
	public function setAccess($access)
	{
		$column = self::COL_ACCESS;
		$this->$column = $access;

		return $this;
	}

	/**
	 * Getter for column `dy_employees`.`data`.
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
	 * Setter for column `dy_employees`.`data`.
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
	 * Getter for column `dy_employees`.`add_time`.
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
	 * Setter for column `dy_employees`.`add_time`.
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
	 * Getter for column `dy_employees`.`update_time`.
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
	 * Setter for column `dy_employees`.`update_time`.
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
	 * Getter for column `dy_employees`.`valid`.
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
	 * Setter for column `dy_employees`.`valid`.
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
