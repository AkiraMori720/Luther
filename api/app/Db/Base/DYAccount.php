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
use DELIVERY\App\Db\DYAccountsQuery as DYAccountsQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;


/**
 * Class DYAccount
 */
abstract class DYAccount extends ORMEntityBase
{
	const TABLE_NAME = 'dy_accounts';

	const COL_ID = 'account_id';
	const COL_USER_ID = 'account_user_id';
	const COL_BALANCE = 'account_balance';
	const COL_CURRENCY_CODE = 'account_currency_code';
	const COL_DATA = 'account_data';
	const COL_ADD_TIME = 'account_add_time';
	const COL_UPDATE_TIME = 'account_update_time';
	const COL_VALID = 'account_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_user;


	/**
	 * DYAccount constructor.
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
			DYAccountsQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_accounts` and `oz_users`.
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
	 * Getter for column `dy_accounts`.`id`.
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
	 * Setter for column `dy_accounts`.`id`.
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
	 * Getter for column `dy_accounts`.`user_id`.
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
	 * Setter for column `dy_accounts`.`user_id`.
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
	 * Getter for column `dy_accounts`.`balance`.
	 *
	 * @return string the real type is: float
	 */
	public function getBalance()
	{
		$column = self::COL_BALANCE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_accounts`.`balance`.
	 *
	 * @param string $balance
	 *
	 * @return static
	 */
	public function setBalance($balance)
	{
		$column = self::COL_BALANCE;
		$this->$column = $balance;

		return $this;
	}

	/**
	 * Getter for column `dy_accounts`.`currency_code`.
	 *
	 * @return string the real type is: string
	 */
	public function getCurrencyCode()
	{
		$column = self::COL_CURRENCY_CODE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_accounts`.`currency_code`.
	 *
	 * @param string $currency_code
	 *
	 * @return static
	 */
	public function setCurrencyCode($currency_code)
	{
		$column = self::COL_CURRENCY_CODE;
		$this->$column = $currency_code;

		return $this;
	}

	/**
	 * Getter for column `dy_accounts`.`data`.
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
	 * Setter for column `dy_accounts`.`data`.
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
	 * Getter for column `dy_accounts`.`add_time`.
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
	 * Setter for column `dy_accounts`.`add_time`.
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
	 * Getter for column `dy_accounts`.`update_time`.
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
	 * Setter for column `dy_accounts`.`update_time`.
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
	 * Getter for column `dy_accounts`.`valid`.
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
	 * Setter for column `dy_accounts`.`valid`.
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
