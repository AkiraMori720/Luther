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
use DELIVERY\App\Db\DYExchangesQuery as DYExchangesQueryReal;



/**
 * Class DYExchange
 */
abstract class DYExchange extends ORMEntityBase
{
	const TABLE_NAME = 'dy_exchanges';

	const COL_ID = 'exchange_id';
	const COL_FROM = 'exchange_from';
	const COL_TO = 'exchange_to';
	const COL_RATE = 'exchange_rate';
	const COL_DATA = 'exchange_data';
	const COL_ADD_TIME = 'exchange_add_time';
	const COL_UPDATE_TIME = 'exchange_update_time';
	const COL_VALID = 'exchange_valid';


	/**
	 * DYExchange constructor.
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
			DYExchangesQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_exchanges`.`id`.
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
	 * Setter for column `dy_exchanges`.`id`.
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
	 * Getter for column `dy_exchanges`.`from`.
	 *
	 * @return string the real type is: string
	 */
	public function getFrom()
	{
		$column = self::COL_FROM;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_exchanges`.`from`.
	 *
	 * @param string $from
	 *
	 * @return static
	 */
	public function setFrom($from)
	{
		$column = self::COL_FROM;
		$this->$column = $from;

		return $this;
	}

	/**
	 * Getter for column `dy_exchanges`.`to`.
	 *
	 * @return string the real type is: string
	 */
	public function getTo()
	{
		$column = self::COL_TO;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_exchanges`.`to`.
	 *
	 * @param string $to
	 *
	 * @return static
	 */
	public function setTo($to)
	{
		$column = self::COL_TO;
		$this->$column = $to;

		return $this;
	}

	/**
	 * Getter for column `dy_exchanges`.`rate`.
	 *
	 * @return string the real type is: float
	 */
	public function getRate()
	{
		$column = self::COL_RATE;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_exchanges`.`rate`.
	 *
	 * @param string $rate
	 *
	 * @return static
	 */
	public function setRate($rate)
	{
		$column = self::COL_RATE;
		$this->$column = $rate;

		return $this;
	}

	/**
	 * Getter for column `dy_exchanges`.`data`.
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
	 * Setter for column `dy_exchanges`.`data`.
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
	 * Getter for column `dy_exchanges`.`add_time`.
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
	 * Setter for column `dy_exchanges`.`add_time`.
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
	 * Getter for column `dy_exchanges`.`update_time`.
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
	 * Setter for column `dy_exchanges`.`update_time`.
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
	 * Getter for column `dy_exchanges`.`valid`.
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
	 * Setter for column `dy_exchanges`.`valid`.
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
