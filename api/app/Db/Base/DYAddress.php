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
use DELIVERY\App\Db\DYAddressesQuery as DYAddressesQueryReal;



/**
 * Class DYAddress
 */
abstract class DYAddress extends ORMEntityBase
{
	const TABLE_NAME = 'dy_addresses';

	const COL_ID = 'address_id';
	const COL_TARGET = 'address_target';
	const COL_TARGET_ID = 'address_target_id';
	const COL_IS_MAIN = 'address_is_main';
	const COL_LONGITUDE = 'address_longitude';
	const COL_LATITUDE = 'address_latitude';
	const COL_ADDRESS = 'address_address';
	const COL_DATA = 'address_data';
	const COL_ADD_TIME = 'address_add_time';
	const COL_UPDATE_TIME = 'address_update_time';
	const COL_VALID = 'address_valid';


	/**
	 * DYAddress constructor.
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
			DYAddressesQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_addresses`.`id`.
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
	 * Setter for column `dy_addresses`.`id`.
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
	 * Getter for column `dy_addresses`.`target`.
	 *
	 * @return string the real type is: string
	 */
	public function getTarget()
	{
		$column = self::COL_TARGET;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_addresses`.`target`.
	 *
	 * @param string $target
	 *
	 * @return static
	 */
	public function setTarget($target)
	{
		$column = self::COL_TARGET;
		$this->$column = $target;

		return $this;
	}

	/**
	 * Getter for column `dy_addresses`.`target_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getTargetId()
	{
		$column = self::COL_TARGET_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_addresses`.`target_id`.
	 *
	 * @param int $target_id
	 *
	 * @return static
	 */
	public function setTargetId($target_id)
	{
		$column = self::COL_TARGET_ID;
		$this->$column = $target_id;

		return $this;
	}

	/**
	 * Getter for column `dy_addresses`.`is_main`.
	 *
	 * @return bool the real type is: bool
	 */
	public function getISMain()
	{
		$column = self::COL_IS_MAIN;
		$v = $this->$column;

		if( $v !== null){
			$v = (bool)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_addresses`.`is_main`.
	 *
	 * @param bool $is_main
	 *
	 * @return static
	 */
	public function setISMain($is_main)
	{
		$column = self::COL_IS_MAIN;
		$this->$column = $is_main;

		return $this;
	}

	/**
	 * Getter for column `dy_addresses`.`longitude`.
	 *
	 * @return string the real type is: string
	 */
	public function getLongitude()
	{
		$column = self::COL_LONGITUDE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_addresses`.`longitude`.
	 *
	 * @param string $longitude
	 *
	 * @return static
	 */
	public function setLongitude($longitude)
	{
		$column = self::COL_LONGITUDE;
		$this->$column = $longitude;

		return $this;
	}

	/**
	 * Getter for column `dy_addresses`.`latitude`.
	 *
	 * @return string the real type is: string
	 */
	public function getLatitude()
	{
		$column = self::COL_LATITUDE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_addresses`.`latitude`.
	 *
	 * @param string $latitude
	 *
	 * @return static
	 */
	public function setLatitude($latitude)
	{
		$column = self::COL_LATITUDE;
		$this->$column = $latitude;

		return $this;
	}

	/**
	 * Getter for column `dy_addresses`.`address`.
	 *
	 * @return string the real type is: string
	 */
	public function getAddress()
	{
		$column = self::COL_ADDRESS;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_addresses`.`address`.
	 *
	 * @param string $address
	 *
	 * @return static
	 */
	public function setAddress($address)
	{
		$column = self::COL_ADDRESS;
		$this->$column = $address;

		return $this;
	}

	/**
	 * Getter for column `dy_addresses`.`data`.
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
	 * Setter for column `dy_addresses`.`data`.
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
	 * Getter for column `dy_addresses`.`add_time`.
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
	 * Setter for column `dy_addresses`.`add_time`.
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
	 * Getter for column `dy_addresses`.`update_time`.
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
	 * Setter for column `dy_addresses`.`update_time`.
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
	 * Getter for column `dy_addresses`.`valid`.
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
	 * Setter for column `dy_addresses`.`valid`.
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
