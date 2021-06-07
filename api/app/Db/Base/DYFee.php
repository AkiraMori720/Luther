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
use DELIVERY\App\Db\DYFeesQuery as DYFeesQueryReal;



/**
 * Class DYFee
 */
abstract class DYFee extends ORMEntityBase
{
	const TABLE_NAME = 'dy_fees';

	const COL_ID = 'fee_id';
	const COL_ORDER_ID = 'fee_order_id';
	const COL_ORDER_LINE_ID = 'fee_order_line_id';
	const COL_VAT_ID = 'fee_vat_id';
	const COL_DELIVERY_ID = 'fee_delivery_id';
	const COL_TYPE = 'fee_type';
	const COL_AMOUNT = 'fee_amount';
	const COL_CURRENCY_CODE = 'fee_currency_code';
	const COL_EXCHANGE_ID = 'fee_exchange_id';
	const COL_BEFORE_VAT = 'fee_before_vat';
	const COL_DATA = 'fee_data';
	const COL_ADD_TIME = 'fee_add_time';
	const COL_UPDATE_TIME = 'fee_update_time';
	const COL_VALID = 'fee_valid';


	/**
	 * DYFee constructor.
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
			DYFeesQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_fees`.`id`.
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
	 * Setter for column `dy_fees`.`id`.
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
	 * Getter for column `dy_fees`.`order_id`.
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
	 * Setter for column `dy_fees`.`order_id`.
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
	 * Getter for column `dy_fees`.`order_line_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getOrderLineId()
	{
		$column = self::COL_ORDER_LINE_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_fees`.`order_line_id`.
	 *
	 * @param int $order_line_id
	 *
	 * @return static
	 */
	public function setOrderLineId($order_line_id)
	{
		$column = self::COL_ORDER_LINE_ID;
		$this->$column = $order_line_id;

		return $this;
	}

	/**
	 * Getter for column `dy_fees`.`vat_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getVatId()
	{
		$column = self::COL_VAT_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_fees`.`vat_id`.
	 *
	 * @param int $vat_id
	 *
	 * @return static
	 */
	public function setVatId($vat_id)
	{
		$column = self::COL_VAT_ID;
		$this->$column = $vat_id;

		return $this;
	}

	/**
	 * Getter for column `dy_fees`.`delivery_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getDeliveryId()
	{
		$column = self::COL_DELIVERY_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_fees`.`delivery_id`.
	 *
	 * @param int $delivery_id
	 *
	 * @return static
	 */
	public function setDeliveryId($delivery_id)
	{
		$column = self::COL_DELIVERY_ID;
		$this->$column = $delivery_id;

		return $this;
	}

	/**
	 * Getter for column `dy_fees`.`type`.
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
	 * Setter for column `dy_fees`.`type`.
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
	 * Getter for column `dy_fees`.`amount`.
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
	 * Setter for column `dy_fees`.`amount`.
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
	 * Getter for column `dy_fees`.`currency_code`.
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
	 * Setter for column `dy_fees`.`currency_code`.
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
	 * Getter for column `dy_fees`.`exchange_id`.
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
	 * Setter for column `dy_fees`.`exchange_id`.
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
	 * Getter for column `dy_fees`.`before_vat`.
	 *
	 * @return bool the real type is: bool
	 */
	public function getBeforeVat()
	{
		$column = self::COL_BEFORE_VAT;
		$v = $this->$column;

		if( $v !== null){
			$v = (bool)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_fees`.`before_vat`.
	 *
	 * @param bool $before_vat
	 *
	 * @return static
	 */
	public function setBeforeVat($before_vat)
	{
		$column = self::COL_BEFORE_VAT;
		$this->$column = $before_vat;

		return $this;
	}

	/**
	 * Getter for column `dy_fees`.`data`.
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
	 * Setter for column `dy_fees`.`data`.
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
	 * Getter for column `dy_fees`.`add_time`.
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
	 * Setter for column `dy_fees`.`add_time`.
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
	 * Getter for column `dy_fees`.`update_time`.
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
	 * Setter for column `dy_fees`.`update_time`.
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
	 * Getter for column `dy_fees`.`valid`.
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
	 * Setter for column `dy_fees`.`valid`.
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
