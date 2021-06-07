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
use DELIVERY\App\Db\DYOrderDiscountsQuery as DYOrderDiscountsQueryReal;



/**
 * Class DYOrderDiscount
 */
abstract class DYOrderDiscount extends ORMEntityBase
{
	const TABLE_NAME = 'dy_discounts';

	const COL_ID = 'order_discount_id';
	const COL_USER_ID = 'order_discount_user_id';
	const COL_ORDER_ID = 'order_discount_order_id';
	const COL_ORDER_LINE_ID = 'order_discount_order_line_id';
	const COL_PROMO_ID = 'order_discount_promo_id';
	const COL_AMOUNT = 'order_discount_amount';
	const COL_CURRENCY_CODE = 'order_discount_currency_code';
	const COL_EXCHANGE_ID = 'order_discount_exchange_id';
	const COL_BEFORE_VAT = 'order_discount_before_vat';
	const COL_DATA = 'order_discount_data';
	const COL_ADD_TIME = 'order_discount_add_time';
	const COL_UPDATE_TIME = 'order_discount_update_time';
	const COL_VALID = 'order_discount_valid';


	/**
	 * DYOrderDiscount constructor.
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
			DYOrderDiscountsQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_discounts`.`id`.
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
	 * Setter for column `dy_discounts`.`id`.
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
	 * Getter for column `dy_discounts`.`user_id`.
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
	 * Setter for column `dy_discounts`.`user_id`.
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
	 * Getter for column `dy_discounts`.`order_id`.
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
	 * Setter for column `dy_discounts`.`order_id`.
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
	 * Getter for column `dy_discounts`.`order_line_id`.
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
	 * Setter for column `dy_discounts`.`order_line_id`.
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
	 * Getter for column `dy_discounts`.`promo_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getPromoId()
	{
		$column = self::COL_PROMO_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_discounts`.`promo_id`.
	 *
	 * @param int $promo_id
	 *
	 * @return static
	 */
	public function setPromoId($promo_id)
	{
		$column = self::COL_PROMO_ID;
		$this->$column = $promo_id;

		return $this;
	}

	/**
	 * Getter for column `dy_discounts`.`amount`.
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
	 * Setter for column `dy_discounts`.`amount`.
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
	 * Getter for column `dy_discounts`.`currency_code`.
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
	 * Setter for column `dy_discounts`.`currency_code`.
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
	 * Getter for column `dy_discounts`.`exchange_id`.
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
	 * Setter for column `dy_discounts`.`exchange_id`.
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
	 * Getter for column `dy_discounts`.`before_vat`.
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
	 * Setter for column `dy_discounts`.`before_vat`.
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
	 * Getter for column `dy_discounts`.`data`.
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
	 * Setter for column `dy_discounts`.`data`.
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
	 * Getter for column `dy_discounts`.`add_time`.
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
	 * Setter for column `dy_discounts`.`add_time`.
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
	 * Getter for column `dy_discounts`.`update_time`.
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
	 * Setter for column `dy_discounts`.`update_time`.
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
	 * Getter for column `dy_discounts`.`valid`.
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
	 * Setter for column `dy_discounts`.`valid`.
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
