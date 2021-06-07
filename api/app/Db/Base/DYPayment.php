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
use DELIVERY\App\Db\DYPaymentsQuery as DYPaymentsQueryReal;



/**
 * Class DYPayment
 */
abstract class DYPayment extends ORMEntityBase
{
	const TABLE_NAME = 'dy_payments';

	const COL_ID = 'payment_id';
	const COL_REF = 'payment_ref';
	const COL_ORDER_ID = 'payment_order_id';
	const COL_AMOUNT = 'payment_amount';
	const COL_CURRENCY_CODE = 'payment_currency_code';
	const COL_EXCHANGE_ID = 'payment_exchange_id';
	const COL_DATA = 'payment_data';
	const COL_ADD_TIME = 'payment_add_time';
	const COL_UPDATE_TIME = 'payment_update_time';
	const COL_VALID = 'payment_valid';


	/**
	 * DYPayment constructor.
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
			DYPaymentsQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_payments`.`id`.
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
	 * Setter for column `dy_payments`.`id`.
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
	 * Getter for column `dy_payments`.`ref`.
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
	 * Setter for column `dy_payments`.`ref`.
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
	 * Getter for column `dy_payments`.`order_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getOrderId()
	{
		$column = self::COL_ORDER_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_payments`.`order_id`.
	 *
	 * @param int $order_id
	 *
	 * @return static
	 */
	public function setOrderId($order_id)
	{
		$column = self::COL_ORDER_ID;
		$this->$column = $order_id;

		return $this;
	}

	/**
	 * Getter for column `dy_payments`.`amount`.
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
	 * Setter for column `dy_payments`.`amount`.
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
	 * Getter for column `dy_payments`.`currency_code`.
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
	 * Setter for column `dy_payments`.`currency_code`.
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
	 * Getter for column `dy_payments`.`exchange_id`.
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
	 * Setter for column `dy_payments`.`exchange_id`.
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
	 * Getter for column `dy_payments`.`data`.
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
	 * Setter for column `dy_payments`.`data`.
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
	 * Getter for column `dy_payments`.`add_time`.
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
	 * Setter for column `dy_payments`.`add_time`.
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
	 * Getter for column `dy_payments`.`update_time`.
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
	 * Setter for column `dy_payments`.`update_time`.
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
	 * Getter for column `dy_payments`.`valid`.
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
	 * Setter for column `dy_payments`.`valid`.
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
