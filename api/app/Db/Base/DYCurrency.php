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
use DELIVERY\App\Db\DYCurrenciesQuery as DYCurrenciesQueryReal;



/**
 * Class DYCurrency
 */
abstract class DYCurrency extends ORMEntityBase
{
	const TABLE_NAME = 'dy_currencies';

	const COL_CODE = 'currency_code';
	const COL_SYMBOL = 'currency_symbol';
	const COL_NAME = 'currency_name';
	const COL_NAME_REAL = 'currency_name_real';
	const COL_MANTISSA = 'currency_mantissa';
	const COL_DATA = 'currency_data';
	const COL_ADD_TIME = 'currency_add_time';
	const COL_UPDATE_TIME = 'currency_update_time';
	const COL_VALID = 'currency_valid';


	/**
	 * DYCurrency constructor.
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
			DYCurrenciesQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_currencies`.`code`.
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
	 * Setter for column `dy_currencies`.`code`.
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
	 * Getter for column `dy_currencies`.`symbol`.
	 *
	 * @return string the real type is: string
	 */
	public function getSymbol()
	{
		$column = self::COL_SYMBOL;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_currencies`.`symbol`.
	 *
	 * @param string $symbol
	 *
	 * @return static
	 */
	public function setSymbol($symbol)
	{
		$column = self::COL_SYMBOL;
		$this->$column = $symbol;

		return $this;
	}

	/**
	 * Getter for column `dy_currencies`.`name`.
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
	 * Setter for column `dy_currencies`.`name`.
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
	 * Getter for column `dy_currencies`.`name_real`.
	 *
	 * @return string the real type is: string
	 */
	public function getNameReal()
	{
		$column = self::COL_NAME_REAL;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_currencies`.`name_real`.
	 *
	 * @param string $name_real
	 *
	 * @return static
	 */
	public function setNameReal($name_real)
	{
		$column = self::COL_NAME_REAL;
		$this->$column = $name_real;

		return $this;
	}

	/**
	 * Getter for column `dy_currencies`.`mantissa`.
	 *
	 * @return int the real type is: int
	 */
	public function getMantissa()
	{
		$column = self::COL_MANTISSA;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_currencies`.`mantissa`.
	 *
	 * @param int $mantissa
	 *
	 * @return static
	 */
	public function setMantissa($mantissa)
	{
		$column = self::COL_MANTISSA;
		$this->$column = $mantissa;

		return $this;
	}

	/**
	 * Getter for column `dy_currencies`.`data`.
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
	 * Setter for column `dy_currencies`.`data`.
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
	 * Getter for column `dy_currencies`.`add_time`.
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
	 * Setter for column `dy_currencies`.`add_time`.
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
	 * Getter for column `dy_currencies`.`update_time`.
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
	 * Setter for column `dy_currencies`.`update_time`.
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
	 * Getter for column `dy_currencies`.`valid`.
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
	 * Setter for column `dy_currencies`.`valid`.
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
