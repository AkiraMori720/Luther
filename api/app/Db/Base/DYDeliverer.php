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
use DELIVERY\App\Db\DYDeliverersQuery as DYDeliverersQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;
use DELIVERY\App\Db\DYCompaniesController as DYCompaniesControllerRealR;


/**
 * Class DYDeliverer
 */
abstract class DYDeliverer extends ORMEntityBase
{
	const TABLE_NAME = 'dy_deliverers';

	const COL_ID = 'deliverer_id';
	const COL_USER_ID = 'deliverer_user_id';
	const COL_COMPANY_ID = 'deliverer_company_id';
	const COL_AVAILABLE = 'deliverer_available';
	const COL_DATA = 'deliverer_data';
	const COL_ADD_TIME = 'deliverer_add_time';
	const COL_UPDATE_TIME = 'deliverer_update_time';
	const COL_VALID = 'deliverer_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_user;

	/**
	 * @var \DELIVERY\App\Db\DYCompany
	 */
	protected $_r_company;


	/**
	 * DYDeliverer constructor.
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
			DYDeliverersQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_deliverers` and `oz_users`.
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
	 * ManyToOne relation between `dy_deliverers` and `dy_companies`.
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
	 * Getter for column `dy_deliverers`.`id`.
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
	 * Setter for column `dy_deliverers`.`id`.
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
	 * Getter for column `dy_deliverers`.`user_id`.
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
	 * Setter for column `dy_deliverers`.`user_id`.
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
	 * Getter for column `dy_deliverers`.`company_id`.
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
	 * Setter for column `dy_deliverers`.`company_id`.
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
	 * Getter for column `dy_deliverers`.`available`.
	 *
	 * @return bool the real type is: bool
	 */
	public function getAvailable()
	{
		$column = self::COL_AVAILABLE;
		$v = $this->$column;

		if( $v !== null){
			$v = (bool)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_deliverers`.`available`.
	 *
	 * @param bool $available
	 *
	 * @return static
	 */
	public function setAvailable($available)
	{
		$column = self::COL_AVAILABLE;
		$this->$column = $available;

		return $this;
	}

	/**
	 * Getter for column `dy_deliverers`.`data`.
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
	 * Setter for column `dy_deliverers`.`data`.
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
	 * Getter for column `dy_deliverers`.`add_time`.
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
	 * Setter for column `dy_deliverers`.`add_time`.
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
	 * Getter for column `dy_deliverers`.`update_time`.
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
	 * Setter for column `dy_deliverers`.`update_time`.
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
	 * Getter for column `dy_deliverers`.`valid`.
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
	 * Setter for column `dy_deliverers`.`valid`.
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
