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
use DELIVERY\App\Db\DYOrderLinesQuery as DYOrderLinesQueryReal;

use DELIVERY\App\Db\DYOrdersController as DYOrdersControllerRealR;
use DELIVERY\App\Db\DYProductsController as DYProductsControllerRealR;
use DELIVERY\App\Db\DYOrderDiscountsController as DYOrderDiscountsControllerRealR;


/**
 * Class DYOrderLine
 */
abstract class DYOrderLine extends ORMEntityBase
{
	const TABLE_NAME = 'dy_order_lines';

	const COL_ID = 'order_line_id';
	const COL_ORDER_ID = 'order_line_order_id';
	const COL_PRODUCT_ID = 'order_line_product_id';
	const COL_COMPANY_ID = 'order_line_company_id';
	const COL_QUANTITY = 'order_line_quantity';
	const COL_PRICE = 'order_line_price';
	const COL_CURRENCY_CODE = 'order_line_currency_code';
	const COL_EXCHANGE_ID = 'order_line_exchange_id';
	const COL_STATE = 'order_line_state';
	const COL_DATA = 'order_line_data';
	const COL_ADD_TIME = 'order_line_add_time';
	const COL_UPDATE_TIME = 'order_line_update_time';
	const COL_VALID = 'order_line_valid';

	/**
	 * @var \DELIVERY\App\Db\DYOrder
	 */
	protected $_r_order;

	/**
	 * @var \DELIVERY\App\Db\DYProduct
	 */
	protected $_r_product;


	/**
	 * DYOrderLine constructor.
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
			DYOrderLinesQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_order_lines` and `dy_orders`.
	 *
	 * @return null|\DELIVERY\App\Db\DYOrder
	 * @throws \Throwable
	 */
	public function getOrder()
	{
		if (!isset($this->_r_order)) {
			$filters = [];
			if(!is_null($v = $this->getOrderId())){
				$filters['order_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYOrdersControllerRealR();
			$this->_r_order = $m->getItem($filters);
		}

		return $this->_r_order;
	}

	/**
	 * OneToOne relation between `dy_order_lines` and `dy_products`.
	 *
	 * @return null|\DELIVERY\App\Db\DYProduct
	 * @throws \Throwable
	 */
	public function getProduct()
	{
		if (!isset($this->_r_product)) {
			$filters = [];
			if(!is_null($v = $this->getProductId())){
				$filters['product_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYProductsControllerRealR();
			$this->_r_product = $m->getItem($filters);
		}

		return $this->_r_product;
	}

	/**
	 * OneToMany relation between `dy_order_lines` and `dy_discounts`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYOrderDiscount[]
	 * @throws \Throwable
	 */
	function getDiscounts($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['order_discount_order_line_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYOrderDiscountsControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * Getter for column `dy_order_lines`.`id`.
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
	 * Setter for column `dy_order_lines`.`id`.
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
	 * Getter for column `dy_order_lines`.`order_id`.
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
	 * Setter for column `dy_order_lines`.`order_id`.
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
	 * Getter for column `dy_order_lines`.`product_id`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getProductId()
	{
		$column = self::COL_PRODUCT_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_order_lines`.`product_id`.
	 *
	 * @param string $product_id
	 *
	 * @return static
	 */
	public function setProductId($product_id)
	{
		$column = self::COL_PRODUCT_ID;
		$this->$column = $product_id;

		return $this;
	}

	/**
	 * Getter for column `dy_order_lines`.`company_id`.
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
	 * Setter for column `dy_order_lines`.`company_id`.
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
	 * Getter for column `dy_order_lines`.`quantity`.
	 *
	 * @return string the real type is: float
	 */
	public function getQuantity()
	{
		$column = self::COL_QUANTITY;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_order_lines`.`quantity`.
	 *
	 * @param string $quantity
	 *
	 * @return static
	 */
	public function setQuantity($quantity)
	{
		$column = self::COL_QUANTITY;
		$this->$column = $quantity;

		return $this;
	}

	/**
	 * Getter for column `dy_order_lines`.`price`.
	 *
	 * @return string the real type is: float
	 */
	public function getPrice()
	{
		$column = self::COL_PRICE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_order_lines`.`price`.
	 *
	 * @param string $price
	 *
	 * @return static
	 */
	public function setPrice($price)
	{
		$column = self::COL_PRICE;
		$this->$column = $price;

		return $this;
	}

	/**
	 * Getter for column `dy_order_lines`.`currency_code`.
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
	 * Setter for column `dy_order_lines`.`currency_code`.
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
	 * Getter for column `dy_order_lines`.`exchange_id`.
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
	 * Setter for column `dy_order_lines`.`exchange_id`.
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
	 * Getter for column `dy_order_lines`.`state`.
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
	 * Setter for column `dy_order_lines`.`state`.
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
	 * Getter for column `dy_order_lines`.`data`.
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
	 * Setter for column `dy_order_lines`.`data`.
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
	 * Getter for column `dy_order_lines`.`add_time`.
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
	 * Setter for column `dy_order_lines`.`add_time`.
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
	 * Getter for column `dy_order_lines`.`update_time`.
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
	 * Setter for column `dy_order_lines`.`update_time`.
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
	 * Getter for column `dy_order_lines`.`valid`.
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
	 * Setter for column `dy_order_lines`.`valid`.
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
