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
use DELIVERY\App\Db\DYTransactionsQuery as DYTransactionsQueryReal;



/**
 * Class DYTransaction
 */
abstract class DYTransaction extends ORMEntityBase
{
	const TABLE_NAME = 'dy_transactions';

	const COL_ID = 'transaction_id';
	const COL_REF = 'transaction_ref';
	const COL_USER_ID = 'transaction_user_id';
	const COL_TYPE = 'transaction_type';
	const COL_AMOUNT = 'transaction_amount';
	const COL_CURRENCY_CODE = 'transaction_currency_code';
	const COL_EXCHANGE_ID = 'transaction_exchange_id';
	const COL_STATE = 'transaction_state';
	const COL_DATA = 'transaction_data';
	const COL_ADD_TIME = 'transaction_add_time';
	const COL_UPDATE_TIME = 'transaction_update_time';
	const COL_VALID = 'transaction_valid';


	/**
	 * DYTransaction constructor.
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
			DYTransactionsQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_transactions`.`id`.
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
	 * Setter for column `dy_transactions`.`id`.
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
	 * Getter for column `dy_transactions`.`ref`.
	 *
	 * @return string the real type is: string
	 */
	public function getRef()
	{
		$column = self::COL_REF;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_transactions`.`ref`.
	 *
	 * @param string $ref
	 *
	 * @return static
	 */
	public function setRef($ref)
	{
		$column = self::COL_REF;
		$this->$column = $ref;

		return $this;
	}

	/**
	 * Getter for column `dy_transactions`.`user_id`.
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
	 * Setter for column `dy_transactions`.`user_id`.
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
	 * Getter for column `dy_transactions`.`type`.
	 *
	 * @return string the real type is: string
	 */
	public function getType()
	{
		$column = self::COL_TYPE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_transactions`.`type`.
	 *
	 * @param string $type
	 *
	 * @return static
	 */
	public function setType($type)
	{
		$column = self::COL_TYPE;
		$this->$column = $type;

		return $this;
	}

	/**
	 * Getter for column `dy_transactions`.`amount`.
	 *
	 * @return string the real type is: float
	 */
	public function getAmount()
	{
		$column = self::COL_AMOUNT;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_transactions`.`amount`.
	 *
	 * @param string $amount
	 *
	 * @return static
	 */
	public function setAmount($amount)
	{
		$column = self::COL_AMOUNT;
		$this->$column = $amount;

		return $this;
	}

	/**
	 * Getter for column `dy_transactions`.`currency_code`.
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
	 * Setter for column `dy_transactions`.`currency_code`.
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
	 * Getter for column `dy_transactions`.`exchange_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getExchangeId()
	{
		$column = self::COL_EXCHANGE_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_transactions`.`exchange_id`.
	 *
	 * @param int $exchange_id
	 *
	 * @return static
	 */
	public function setExchangeId($exchange_id)
	{
		$column = self::COL_EXCHANGE_ID;
		$this->$column = $exchange_id;

		return $this;
	}

	/**
	 * Getter for column `dy_transactions`.`state`.
	 *
	 * @return string the real type is: string
	 */
	public function getState()
	{
		$column = self::COL_STATE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_transactions`.`state`.
	 *
	 * @param string $state
	 *
	 * @return static
	 */
	public function setState($state)
	{
		$column = self::COL_STATE;
		$this->$column = $state;

		return $this;
	}

	/**
	 * Getter for column `dy_transactions`.`data`.
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
	 * Setter for column `dy_transactions`.`data`.
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
	 * Getter for column `dy_transactions`.`add_time`.
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
	 * Setter for column `dy_transactions`.`add_time`.
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
	 * Getter for column `dy_transactions`.`update_time`.
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
	 * Setter for column `dy_transactions`.`update_time`.
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
	 * Getter for column `dy_transactions`.`valid`.
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
	 * Setter for column `dy_transactions`.`valid`.
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
