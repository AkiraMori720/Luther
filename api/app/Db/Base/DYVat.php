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
use DELIVERY\App\Db\DYVatsQuery as DYVatsQueryReal;



/**
 * Class DYVat
 */
abstract class DYVat extends ORMEntityBase
{
	const TABLE_NAME = 'dy_vats';

	const COL_ID = 'vat_id';
	const COL_COMPANY_ID = 'vat_company_id';
	const COL_TYPE = 'vat_type';
	const COL_NAME = 'vat_name';
	const COL_VALUE = 'vat_value';
	const COL_DATA = 'vat_data';
	const COL_ADD_TIME = 'vat_add_time';
	const COL_UPDATE_TIME = 'vat_update_time';
	const COL_VALID = 'vat_valid';


	/**
	 * DYVat constructor.
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
			DYVatsQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_vats`.`id`.
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
	 * Setter for column `dy_vats`.`id`.
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
	 * Getter for column `dy_vats`.`company_id`.
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
	 * Setter for column `dy_vats`.`company_id`.
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
	 * Getter for column `dy_vats`.`type`.
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
	 * Setter for column `dy_vats`.`type`.
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
	 * Getter for column `dy_vats`.`name`.
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
	 * Setter for column `dy_vats`.`name`.
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
	 * Getter for column `dy_vats`.`value`.
	 *
	 * @return string the real type is: float
	 */
	public function getValue()
	{
		$column = self::COL_VALUE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_vats`.`value`.
	 *
	 * @param string $value
	 *
	 * @return static
	 */
	public function setValue($value)
	{
		$column = self::COL_VALUE;
		$this->$column = $value;

		return $this;
	}

	/**
	 * Getter for column `dy_vats`.`data`.
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
	 * Setter for column `dy_vats`.`data`.
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
	 * Getter for column `dy_vats`.`add_time`.
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
	 * Setter for column `dy_vats`.`add_time`.
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
	 * Getter for column `dy_vats`.`update_time`.
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
	 * Setter for column `dy_vats`.`update_time`.
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
	 * Getter for column `dy_vats`.`valid`.
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
	 * Setter for column `dy_vats`.`valid`.
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
