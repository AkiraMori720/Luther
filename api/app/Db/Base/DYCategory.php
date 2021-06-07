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
use DELIVERY\App\Db\DYCategoriesQuery as DYCategoriesQueryReal;

use DELIVERY\App\Db\DYProductsController as DYProductsControllerRealR;


/**
 * Class DYCategory
 */
abstract class DYCategory extends ORMEntityBase
{
	const TABLE_NAME = 'dy_categories';

	const COL_ID = 'category_id';
	const COL_TYPE = 'category_type';
	const COL_NAME = 'category_name';
	const COL_SLUG = 'category_slug';
	const COL_SHORT_DESCRIPTION = 'category_short_description';
	const COL_DESCRIPTION = 'category_description';
	const COL_IMAGE = 'category_image';
	const COL_DATA = 'category_data';
	const COL_ADD_TIME = 'category_add_time';
	const COL_UPDATE_TIME = 'category_update_time';
	const COL_VALID = 'category_valid';


	/**
	 * DYCategory constructor.
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
			DYCategoriesQueryReal::class
		);
	}

	/**
	 * OneToMany relation between `dy_categories` and `dy_products`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYProduct[]
	 * @throws \Throwable
	 */
	function getProducts($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['product_category_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYProductsControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * Getter for column `dy_categories`.`id`.
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
	 * Setter for column `dy_categories`.`id`.
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
	 * Getter for column `dy_categories`.`type`.
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
	 * Setter for column `dy_categories`.`type`.
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
	 * Getter for column `dy_categories`.`name`.
	 *
	 * @return string the real type is: string
	 */
	public function getName()
	{
		$column = self::COL_NAME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_categories`.`name`.
	 *
	 * @param string $name
	 *
	 * @return static
	 */
	public function setName($name)
	{
		$column = self::COL_NAME;
		$this->$column = $name;

		return $this;
	}

	/**
	 * Getter for column `dy_categories`.`slug`.
	 *
	 * @return string the real type is: string
	 */
	public function getSlug()
	{
		$column = self::COL_SLUG;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_categories`.`slug`.
	 *
	 * @param string $slug
	 *
	 * @return static
	 */
	public function setSlug($slug)
	{
		$column = self::COL_SLUG;
		$this->$column = $slug;

		return $this;
	}

	/**
	 * Getter for column `dy_categories`.`short_description`.
	 *
	 * @return string the real type is: string
	 */
	public function getShortDescription()
	{
		$column = self::COL_SHORT_DESCRIPTION;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_categories`.`short_description`.
	 *
	 * @param string $short_description
	 *
	 * @return static
	 */
	public function setShortDescription($short_description)
	{
		$column = self::COL_SHORT_DESCRIPTION;
		$this->$column = $short_description;

		return $this;
	}

	/**
	 * Getter for column `dy_categories`.`description`.
	 *
	 * @return string the real type is: string
	 */
	public function getDescription()
	{
		$column = self::COL_DESCRIPTION;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_categories`.`description`.
	 *
	 * @param string $description
	 *
	 * @return static
	 */
	public function setDescription($description)
	{
		$column = self::COL_DESCRIPTION;
		$this->$column = $description;

		return $this;
	}

	/**
	 * Getter for column `dy_categories`.`image`.
	 *
	 * @return string the real type is: string
	 */
	public function getImage()
	{
		$column = self::COL_IMAGE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_categories`.`image`.
	 *
	 * @param string $image
	 *
	 * @return static
	 */
	public function setImage($image)
	{
		$column = self::COL_IMAGE;
		$this->$column = $image;

		return $this;
	}

	/**
	 * Getter for column `dy_categories`.`data`.
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
	 * Setter for column `dy_categories`.`data`.
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
	 * Getter for column `dy_categories`.`add_time`.
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
	 * Setter for column `dy_categories`.`add_time`.
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
	 * Getter for column `dy_categories`.`update_time`.
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
	 * Setter for column `dy_categories`.`update_time`.
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
	 * Getter for column `dy_categories`.`valid`.
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
	 * Setter for column `dy_categories`.`valid`.
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
