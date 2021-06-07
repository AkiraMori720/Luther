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
use DELIVERY\App\Db\DYPubsQuery as DYPubsQueryReal;



/**
 * Class DYPub
 */
abstract class DYPub extends ORMEntityBase
{
	const TABLE_NAME = 'dy_pubs';

	const COL_ID = 'pub_id';
	const COL_REF = 'pub_ref';
	const COL_TITLE = 'pub_title';
	const COL_LINK = 'pub_link';
	const COL_IMAGE = 'pub_image';
	const COL_DATA = 'pub_data';
	const COL_ADD_TIME = 'pub_add_time';
	const COL_UPDATE_TIME = 'pub_update_time';
	const COL_VALID = 'pub_valid';


	/**
	 * DYPub constructor.
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
			DYPubsQueryReal::class
		);
	}

	/**
	 * Getter for column `dy_pubs`.`id`.
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
	 * Setter for column `dy_pubs`.`id`.
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
	 * Getter for column `dy_pubs`.`ref`.
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
	 * Setter for column `dy_pubs`.`ref`.
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
	 * Getter for column `dy_pubs`.`title`.
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
	 * Setter for column `dy_pubs`.`title`.
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
	 * Getter for column `dy_pubs`.`link`.
	 *
	 * @return string the real type is: string
	 */
	public function getLink()
	{
		$column = self::COL_LINK;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_pubs`.`link`.
	 *
	 * @param string $link
	 *
	 * @return static
	 */
	public function setLink($link)
	{
		$column = self::COL_LINK;
		$this->$column = $link;

		return $this;
	}

	/**
	 * Getter for column `dy_pubs`.`image`.
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
	 * Setter for column `dy_pubs`.`image`.
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
	 * Getter for column `dy_pubs`.`data`.
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
	 * Setter for column `dy_pubs`.`data`.
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
	 * Getter for column `dy_pubs`.`add_time`.
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
	 * Setter for column `dy_pubs`.`add_time`.
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
	 * Getter for column `dy_pubs`.`update_time`.
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
	 * Setter for column `dy_pubs`.`update_time`.
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
	 * Getter for column `dy_pubs`.`valid`.
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
	 * Setter for column `dy_pubs`.`valid`.
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
