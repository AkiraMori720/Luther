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
use DELIVERY\App\Db\DYOrdersQuery as DYOrdersQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;
use DELIVERY\App\Db\DYDeliveriesController as DYDeliveriesControllerRealR;
use DELIVERY\App\Db\DYOrderLinesController as DYOrderLinesControllerRealR;
use DELIVERY\App\Db\DYFeesController as DYFeesControllerRealR;
use DELIVERY\App\Db\DYOrderDiscountsController as DYOrderDiscountsControllerRealR;


/**
 * Class DYOrder
 */
abstract class DYOrder extends ORMEntityBase
{
	const TABLE_NAME = 'dy_orders';

	const COL_ID = 'order_id';
	const COL_USER_ID = 'order_user_id';
	const COL_STATE = 'order_state';
	const COL_DATA = 'order_data';
	const COL_ADD_TIME = 'order_add_time';
	const COL_UPDATE_TIME = 'order_update_time';
	const COL_VALID = 'order_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_client;


	/**
	 * DYOrder constructor.
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
			DYOrdersQueryReal::class
		);
	}

	/**
	 * ManyToOne relation between `dy_orders` and `oz_users`.
	 *
	 * @return null|\OZONE\OZ\Db\OZUser
	 * @throws \Throwable
	 */
	public function getClient()
	{
		if (!isset($this->_r_client)) {
			$filters = [];
			if(!is_null($v = $this->getUserId())){
				$filters['user_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new OZUsersControllerRealR();
			$this->_r_client = $m->getItem($filters);
		}

		return $this->_r_client;
	}

	/**
	 * OneToMany relation between `dy_orders` and `dy_deliveries`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYDelivery[]
	 * @throws \Throwable
	 */
	function getDelivery($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['delivery_order_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYDeliveriesControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * OneToMany relation between `dy_orders` and `dy_order_lines`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYOrderLine[]
	 * @throws \Throwable
	 */
	function getOrderLines($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['order_line_order_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYOrderLinesControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * OneToMany relation between `dy_orders` and `dy_fees`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYFee[]
	 * @throws \Throwable
	 */
	function getFees($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['fee_order_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYFeesControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * OneToMany relation between `dy_orders` and `dy_discounts`.
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
			$filters['order_discount_order_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYOrderDiscountsControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * Getter for column `dy_orders`.`id`.
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
	 * Setter for column `dy_orders`.`id`.
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
	 * Getter for column `dy_orders`.`user_id`.
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
	 * Setter for column `dy_orders`.`user_id`.
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
	 * Getter for column `dy_orders`.`state`.
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
	 * Setter for column `dy_orders`.`state`.
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
	 * Getter for column `dy_orders`.`data`.
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
	 * Setter for column `dy_orders`.`data`.
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
	 * Getter for column `dy_orders`.`add_time`.
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
	 * Setter for column `dy_orders`.`add_time`.
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
	 * Getter for column `dy_orders`.`update_time`.
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
	 * Setter for column `dy_orders`.`update_time`.
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
	 * Getter for column `dy_orders`.`valid`.
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
	 * Setter for column `dy_orders`.`valid`.
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
