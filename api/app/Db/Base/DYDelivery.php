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
use DELIVERY\App\Db\DYDeliveriesQuery as DYDeliveriesQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;
use DELIVERY\App\Db\DYOrdersController as DYOrdersControllerRealR;


/**
 * Class DYDelivery
 */
abstract class DYDelivery extends ORMEntityBase
{
	const TABLE_NAME = 'dy_deliveries';

	const COL_ID = 'delivery_id';
	const COL_USER_ID = 'delivery_user_id';
	const COL_ORDER_ID = 'delivery_order_id';
	const COL_STATE = 'delivery_state';
	const COL_STARS = 'delivery_stars';
	const COL_DATA = 'delivery_data';
	const COL_ADD_TIME = 'delivery_add_time';
	const COL_UPDATE_TIME = 'delivery_update_time';
	const COL_VALID = 'delivery_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_deliverer;

	/**
	 * @var \DELIVERY\App\Db\DYOrder
	 */
	protected $_r_order;


	/**
	 * DYDelivery constructor.
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
			DYDeliveriesQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_deliveries` and `oz_users`.
	 *
	 * @return null|\OZONE\OZ\Db\OZUser
	 * @throws \Throwable
	 */
	public function getDeliverer()
	{
		if (!isset($this->_r_deliverer)) {
			$filters = [];
			if(!is_null($v = $this->getUserId())){
				$filters['user_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new OZUsersControllerRealR();
			$this->_r_deliverer = $m->getItem($filters);
		}

		return $this->_r_deliverer;
	}

	/**
	 * ManyToOne relation between `dy_deliveries` and `dy_orders`.
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
	 * Getter for column `dy_deliveries`.`id`.
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
	 * Setter for column `dy_deliveries`.`id`.
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
	 * Getter for column `dy_deliveries`.`user_id`.
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
	 * Setter for column `dy_deliveries`.`user_id`.
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
	 * Getter for column `dy_deliveries`.`order_id`.
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
	 * Setter for column `dy_deliveries`.`order_id`.
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
	 * Getter for column `dy_deliveries`.`state`.
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
	 * Setter for column `dy_deliveries`.`state`.
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
	 * Getter for column `dy_deliveries`.`stars`.
	 *
	 * @return int the real type is: int
	 */
	public function getStars()
	{
		$column = self::COL_STARS;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_deliveries`.`stars`.
	 *
	 * @param int $stars
	 *
	 * @return static
	 */
	public function setStars($stars)
	{
		$column = self::COL_STARS;
		$this->$column = $stars;

		return $this;
	}

	/**
	 * Getter for column `dy_deliveries`.`data`.
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
	 * Setter for column `dy_deliveries`.`data`.
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
	 * Getter for column `dy_deliveries`.`add_time`.
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
	 * Setter for column `dy_deliveries`.`add_time`.
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
	 * Getter for column `dy_deliveries`.`update_time`.
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
	 * Setter for column `dy_deliveries`.`update_time`.
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
	 * Getter for column `dy_deliveries`.`valid`.
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
	 * Setter for column `dy_deliveries`.`valid`.
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
