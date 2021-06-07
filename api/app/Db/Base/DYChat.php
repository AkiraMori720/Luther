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
use DELIVERY\App\Db\DYChatsQuery as DYChatsQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;
use DELIVERY\App\Db\DYCompaniesController as DYCompaniesControllerRealR;
use DELIVERY\App\Db\DYMessagesController as DYMessagesControllerRealR;


/**
 * Class DYChat
 */
abstract class DYChat extends ORMEntityBase
{
	const TABLE_NAME = 'dy_chats';

	const COL_ID = 'chat_id';
	const COL_CREATED_BY = 'chat_created_by';
	const COL_COMPANY_ID = 'chat_company_id';
	const COL_TARGET_ID = 'chat_target_id';
	const COL_DATA = 'chat_data';
	const COL_ADD_TIME = 'chat_add_time';
	const COL_UPDATE_TIME = 'chat_update_time';
	const COL_VALID = 'chat_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_creator;

	/**
	 * @var \DELIVERY\App\Db\DYCompany
	 */
	protected $_r_company;


	/**
	 * DYChat constructor.
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
			DYChatsQueryReal::class
		);
	}

	/**
	 * ManyToOne relation between `dy_chats` and `oz_users`.
	 *
	 * @return null|\OZONE\OZ\Db\OZUser
	 * @throws \Throwable
	 */
	public function getCreator()
	{
		if (!isset($this->_r_creator)) {
			$filters = [];
			if(!is_null($v = $this->getCreatedBy())){
				$filters['user_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new OZUsersControllerRealR();
			$this->_r_creator = $m->getItem($filters);
		}

		return $this->_r_creator;
	}

	/**
	 * ManyToOne relation between `dy_chats` and `dy_companies`.
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
	 * OneToMany relation between `dy_chats` and `dy_messages`.
	 *
	 * @param array	$filters  the row filters
	 * @param int|null $max	  maximum row to retrieve
	 * @param int	  $offset   first row offset
	 * @param array	$order_by order by rules
	 * @param int|bool $total	total rows without limit
	 *
	 * @return \DELIVERY\App\Db\DYMessage[]
	 * @throws \Throwable
	 */
	function getMessages($filters = [], $max = null, $offset = 0, $order_by = [], &$total = false)
	{
		if(!is_null($v = $this->getId())){
			$filters['message_chat_id'] = $v;
		}
		if (empty($filters)){
			return [];
		}

		$ctrl = new DYMessagesControllerRealR();

		return $ctrl->getAllItems($filters, $max, $offset, $order_by, $total);
	}

	/**
	 * Getter for column `dy_chats`.`id`.
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
	 * Setter for column `dy_chats`.`id`.
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
	 * Getter for column `dy_chats`.`created_by`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getCreatedBy()
	{
		$column = self::COL_CREATED_BY;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_chats`.`created_by`.
	 *
	 * @param string $created_by
	 *
	 * @return static
	 */
	public function setCreatedBy($created_by)
	{
		$column = self::COL_CREATED_BY;
		$this->$column = $created_by;

		return $this;
	}

	/**
	 * Getter for column `dy_chats`.`company_id`.
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
	 * Setter for column `dy_chats`.`company_id`.
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
	 * Getter for column `dy_chats`.`target_id`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getTargetId()
	{
		$column = self::COL_TARGET_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_chats`.`target_id`.
	 *
	 * @param string $target_id
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
	 * Getter for column `dy_chats`.`data`.
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
	 * Setter for column `dy_chats`.`data`.
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
	 * Getter for column `dy_chats`.`add_time`.
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
	 * Setter for column `dy_chats`.`add_time`.
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
	 * Getter for column `dy_chats`.`update_time`.
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
	 * Setter for column `dy_chats`.`update_time`.
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
	 * Getter for column `dy_chats`.`valid`.
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
	 * Setter for column `dy_chats`.`valid`.
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
