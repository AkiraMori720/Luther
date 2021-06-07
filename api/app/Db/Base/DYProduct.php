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
use DELIVERY\App\Db\DYProductsQuery as DYProductsQueryReal;

use DELIVERY\App\Db\DYCategoriesController as DYCategoriesControllerRealR;
use DELIVERY\App\Db\DYCompaniesController as DYCompaniesControllerRealR;


/**
 * Class DYProduct
 */
abstract class DYProduct extends ORMEntityBase
{
	const TABLE_NAME = 'dy_products';

	const COL_ID = 'product_id';
	const COL_COMPANY_ID = 'product_company_id';
	const COL_CATEGORY_ID = 'product_category_id';
	const COL_REF = 'product_ref';
	const COL_NAME = 'product_name';
	const COL_SLUG = 'product_slug';
	const COL_SHORT_DESCRIPTION = 'product_short_description';
	const COL_DESCRIPTION = 'product_description';
	const COL_IMAGES = 'product_images';
	const COL_PRICE = 'product_price';
	const COL_CURRENCY_CODE = 'product_currency_code';
	const COL_VAT_ID = 'product_vat_id';
	const COL_DATA = 'product_data';
	const COL_ADD_TIME = 'product_add_time';
	const COL_UPDATE_TIME = 'product_update_time';
	const COL_VALID = 'product_valid';

	/**
	 * @var \DELIVERY\App\Db\DYCategory
	 */
	protected $_r_category;

	/**
	 * @var \DELIVERY\App\Db\DYCompany
	 */
	protected $_r_company;


	/**
	 * DYProduct constructor.
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
			DYProductsQueryReal::class
		);
	}

	/**
	 * ManyToOne relation between `dy_products` and `dy_categories`.
	 *
	 * @return null|\DELIVERY\App\Db\DYCategory
	 * @throws \Throwable
	 */
	public function getCategory()
	{
		if (!isset($this->_r_category)) {
			$filters = [];
			if(!is_null($v = $this->getCategoryId())){
				$filters['category_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYCategoriesControllerRealR();
			$this->_r_category = $m->getItem($filters);
		}

		return $this->_r_category;
	}

	/**
	 * ManyToOne relation between `dy_products` and `dy_companies`.
	 *
	 * @return null|\DELIVERY\App\Db\DYCompany
	 * @throws \Throwable
	 */
	public function getCompany()
	{
		if (!isset($this->_r_company)) {
			$filters = [];
			if(!is_null($v = $this->getCompanyId())){
				$filters['company_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYCompaniesControllerRealR();
			$this->_r_company = $m->getItem($filters);
		}

		return $this->_r_company;
	}

	/**
	 * Getter for column `dy_products`.`id`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getId()
	{
		$column = self::COL_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_products`.`id`.
	 *
	 * @param string $id
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
	 * Getter for column `dy_products`.`company_id`.
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
	 * Setter for column `dy_products`.`company_id`.
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
	 * Getter for column `dy_products`.`category_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getCategoryId()
	{
		$column = self::COL_CATEGORY_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_products`.`category_id`.
	 *
	 * @param int $category_id
	 *
	 * @return static
	 */
	public function setCategoryId($category_id)
	{
		$column = self::COL_CATEGORY_ID;
		$this->$column = $category_id;

		return $this;
	}

	/**
	 * Getter for column `dy_products`.`ref`.
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
	 * Setter for column `dy_products`.`ref`.
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
	 * Getter for column `dy_products`.`name`.
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
	 * Setter for column `dy_products`.`name`.
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
	 * Getter for column `dy_products`.`slug`.
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
	 * Setter for column `dy_products`.`slug`.
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
	 * Getter for column `dy_products`.`short_description`.
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
	 * Setter for column `dy_products`.`short_description`.
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
	 * Getter for column `dy_products`.`description`.
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
	 * Setter for column `dy_products`.`description`.
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
	 * Getter for column `dy_products`.`images`.
	 *
	 * @return string the real type is: string
	 */
	public function getImages()
	{
		$column = self::COL_IMAGES;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_products`.`images`.
	 *
	 * @param string $images
	 *
	 * @return static
	 */
	public function setImages($images)
	{
		$column = self::COL_IMAGES;
		$this->$column = $images;

		return $this;
	}

	/**
	 * Getter for column `dy_products`.`price`.
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
	 * Setter for column `dy_products`.`price`.
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
	 * Getter for column `dy_products`.`currency_code`.
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
	 * Setter for column `dy_products`.`currency_code`.
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
	 * Getter for column `dy_products`.`vat_id`.
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
	 * Setter for column `dy_products`.`vat_id`.
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
	 * Getter for column `dy_products`.`data`.
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
	 * Setter for column `dy_products`.`data`.
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
	 * Getter for column `dy_products`.`add_time`.
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
	 * Setter for column `dy_products`.`add_time`.
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
	 * Getter for column `dy_products`.`update_time`.
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
	 * Setter for column `dy_products`.`update_time`.
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
	 * Getter for column `dy_products`.`valid`.
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
	 * Setter for column `dy_products`.`valid`.
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
