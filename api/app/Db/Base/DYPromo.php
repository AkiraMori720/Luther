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
use DELIVERY\App\Db\DYPromosQuery as DYPromosQueryReal;

use DELIVERY\App\Db\DYPromoProductsController as DYPromoProductsControllerRealR;


/**
 * Class DYPromo
 */
abstract class DYPromo extends ORMEntityBase
{
	const TABLE_NAME = 'dy_promos';

	const COL_ID = 'promo_id';
	const COL_REF = 'promo_ref';
	const COL_COMPANY_ID = 'promo_company_id';
	const COL_TITLE = 'promo_title';
	const COL_SHORT_DESCRIPTION = 'promo_short_description';
	const COL_DESCRIPTION = 'promo_description';
	const COL_TYPE = 'promo_type';
	const COL_CODE = 'promo_code';
	const COL_AUTO_APPLY = 'promo_auto_apply';
	const COL_TOTAL_APPLIED = 'promo_total_applied';
	const COL_MAX_APPLY = 'promo_max_apply';
	const COL_MAX_USER_APPLY = 'promo_max_user_apply';
	const COL_BEFORE_VAT = 'promo_before_vat';
	const COL_AMOUNT = 'promo_amount';
	const COL_PERCENT = 'promo_percent';
	const COL_CURRENCY_CODE = 'promo_currency_code';
	const COL_START_TIME = 'promo_start_time';
	const COL_END_TIME = 'promo_end_time';
	const COL_STATE = 'promo_state';
	const COL_DATA = 'promo_data';
	const COL_ADD_TIME = 'promo_add_time';
	const COL_UPDATE_TIME = 'promo_update_time';
	const COL_VALID = 'promo_valid';

	/**
	 * @var \DELIVERY\App\Db\DYPromoProduct
	 */
	protected $_r_promo_products;


	/**
	 * DYPromo constructor.
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
			DYPromosQueryReal::class
		);
	}

	/**
	 * OneToOne relation between `dy_promos` and `dy_promo_products`.
	 *
	 * @return null|\DELIVERY\App\Db\DYPromoProduct
	 * @throws \Throwable
	 */
	public function getPromoProducts()
	{
		if (!isset($this->_r_promo_products)) {
			$filters = [];
			if(!is_null($v = $this->getId())){
				$filters['pp_promo_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYPromoProductsControllerRealR();
			$this->_r_promo_products = $m->getItem($filters);
		}

		return $this->_r_promo_products;
	}

	/**
	 * Getter for column `dy_promos`.`id`.
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
	 * Setter for column `dy_promos`.`id`.
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
	 * Getter for column `dy_promos`.`ref`.
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
	 * Setter for column `dy_promos`.`ref`.
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
	 * Getter for column `dy_promos`.`company_id`.
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
	 * Setter for column `dy_promos`.`company_id`.
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
	 * Getter for column `dy_promos`.`title`.
	 *
	 * @return string the real type is: string
	 */
	public function getTitle()
	{
		$column = self::COL_TITLE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`title`.
	 *
	 * @param string $title
	 *
	 * @return static
	 */
	public function setTitle($title)
	{
		$column = self::COL_TITLE;
		$this->$column = $title;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`short_description`.
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
	 * Setter for column `dy_promos`.`short_description`.
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
	 * Getter for column `dy_promos`.`description`.
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
	 * Setter for column `dy_promos`.`description`.
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
	 * Getter for column `dy_promos`.`type`.
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
	 * Setter for column `dy_promos`.`type`.
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
	 * Getter for column `dy_promos`.`code`.
	 *
	 * @return string the real type is: string
	 */
	public function getCode()
	{
		$column = self::COL_CODE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`code`.
	 *
	 * @param string $code
	 *
	 * @return static
	 */
	public function setCode($code)
	{
		$column = self::COL_CODE;
		$this->$column = $code;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`auto_apply`.
	 *
	 * @return bool the real type is: bool
	 */
	public function getAutoApply()
	{
		$column = self::COL_AUTO_APPLY;
		$v = $this->$column;

		if( $v !== null){
			$v = (bool)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`auto_apply`.
	 *
	 * @param bool $auto_apply
	 *
	 * @return static
	 */
	public function setAutoApply($auto_apply)
	{
		$column = self::COL_AUTO_APPLY;
		$this->$column = $auto_apply;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`total_applied`.
	 *
	 * @return int the real type is: int
	 */
	public function getTotalApplied()
	{
		$column = self::COL_TOTAL_APPLIED;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`total_applied`.
	 *
	 * @param int $total_applied
	 *
	 * @return static
	 */
	public function setTotalApplied($total_applied)
	{
		$column = self::COL_TOTAL_APPLIED;
		$this->$column = $total_applied;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`max_apply`.
	 *
	 * @return int the real type is: int
	 */
	public function getMaxApply()
	{
		$column = self::COL_MAX_APPLY;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`max_apply`.
	 *
	 * @param int $max_apply
	 *
	 * @return static
	 */
	public function setMaxApply($max_apply)
	{
		$column = self::COL_MAX_APPLY;
		$this->$column = $max_apply;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`max_user_apply`.
	 *
	 * @return int the real type is: int
	 */
	public function getMaxUserApply()
	{
		$column = self::COL_MAX_USER_APPLY;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`max_user_apply`.
	 *
	 * @param int $max_user_apply
	 *
	 * @return static
	 */
	public function setMaxUserApply($max_user_apply)
	{
		$column = self::COL_MAX_USER_APPLY;
		$this->$column = $max_user_apply;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`before_vat`.
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
	 * Setter for column `dy_promos`.`before_vat`.
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
	 * Getter for column `dy_promos`.`amount`.
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
	 * Setter for column `dy_promos`.`amount`.
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
	 * Getter for column `dy_promos`.`percent`.
	 *
	 * @return string the real type is: float
	 */
	public function getPercent()
	{
		$column = self::COL_PERCENT;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`percent`.
	 *
	 * @param string $percent
	 *
	 * @return static
	 */
	public function setPercent($percent)
	{
		$column = self::COL_PERCENT;
		$this->$column = $percent;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`currency_code`.
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
	 * Setter for column `dy_promos`.`currency_code`.
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
	 * Getter for column `dy_promos`.`start_time`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getStartTime()
	{
		$column = self::COL_START_TIME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`start_time`.
	 *
	 * @param string $start_time
	 *
	 * @return static
	 */
	public function setStartTime($start_time)
	{
		$column = self::COL_START_TIME;
		$this->$column = $start_time;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`end_time`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getEndTime()
	{
		$column = self::COL_END_TIME;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_promos`.`end_time`.
	 *
	 * @param string $end_time
	 *
	 * @return static
	 */
	public function setEndTime($end_time)
	{
		$column = self::COL_END_TIME;
		$this->$column = $end_time;

		return $this;
	}

	/**
	 * Getter for column `dy_promos`.`state`.
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
	 * Setter for column `dy_promos`.`state`.
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
	 * Getter for column `dy_promos`.`data`.
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
	 * Setter for column `dy_promos`.`data`.
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
	 * Getter for column `dy_promos`.`add_time`.
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
	 * Setter for column `dy_promos`.`add_time`.
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
	 * Getter for column `dy_promos`.`update_time`.
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
	 * Setter for column `dy_promos`.`update_time`.
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
	 * Getter for column `dy_promos`.`valid`.
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
	 * Setter for column `dy_promos`.`valid`.
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
