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
use DELIVERY\App\Db\DYPromoProductsQuery as DYPromoProductsQueryReal;

use DELIVERY\App\Db\DYProductsController as DYProductsControllerRealR;


/**
 * Class DYPromoProduct
 */
abstract class DYPromoProduct extends ORMEntityBase
{
	const TABLE_NAME = 'dy_promo_products';

	const COL_PROMO_ID = 'pp_promo_id';
	const COL_PRODUCT_ID = 'pp_product_id';
	const COL_DATA = 'pp_data';
	const COL_ADD_TIME = 'pp_add_time';
	const COL_UPDATE_TIME = 'pp_update_time';
	const COL_VALID = 'pp_valid';

	/**
	 * @var \DELIVERY\App\Db\DYProduct
	 */
	protected $_r_product;


	/**
	 * DYPromoProduct constructor.
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
			DYPromoProductsQueryReal::class
		);
	}

	/**
	 * ManyToOne relation between `dy_promo_products` and `dy_products`.
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
	 * Getter for column `dy_promo_products`.`promo_id`.
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
	 * Setter for column `dy_promo_products`.`promo_id`.
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
	 * Getter for column `dy_promo_products`.`product_id`.
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
	 * Setter for column `dy_promo_products`.`product_id`.
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
	 * Getter for column `dy_promo_products`.`data`.
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
	 * Setter for column `dy_promo_products`.`data`.
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
	 * Getter for column `dy_promo_products`.`add_time`.
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
	 * Setter for column `dy_promo_products`.`add_time`.
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
	 * Getter for column `dy_promo_products`.`update_time`.
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
	 * Setter for column `dy_promo_products`.`update_time`.
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
	 * Getter for column `dy_promo_products`.`valid`.
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
	 * Setter for column `dy_promo_products`.`valid`.
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
