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
use DELIVERY\App\Db\DYMessagesQuery as DYMessagesQueryReal;

use OZONE\OZ\Db\OZUsersController as OZUsersControllerRealR;
use DELIVERY\App\Db\DYChatsController as DYChatsControllerRealR;
use DELIVERY\App\Db\DYMessagesController as DYMessagesControllerRealR;


/**
 * Class DYMessage
 */
abstract class DYMessage extends ORMEntityBase
{
	const TABLE_NAME = 'dy_messages';

	const COL_ID = 'message_id';
	const COL_SENDER_ID = 'message_sender_id';
	const COL_CHAT_ID = 'message_chat_id';
	const COL_REF_ID = 'message_ref_id';
	const COL_TYPE = 'message_type';
	const COL_CONTENT = 'message_content';
	const COL_READ = 'message_read';
	const COL_DATA = 'message_data';
	const COL_ADD_TIME = 'message_add_time';
	const COL_UPDATE_TIME = 'message_update_time';
	const COL_VALID = 'message_valid';

	/**
	 * @var \OZONE\OZ\Db\OZUser
	 */
	protected $_r_sender;

	/**
	 * @var \DELIVERY\App\Db\DYChat
	 */
	protected $_r_chat;

	/**
	 * @var \DELIVERY\App\Db\DYMessage
	 */
	protected $_r_ref_message;


	/**
	 * DYMessage constructor.
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
			DYMessagesQueryReal::class
		);
	}

	/**
	 * ManyToOne relation between `dy_messages` and `oz_users`.
	 *
	 * @return null|\OZONE\OZ\Db\OZUser
	 * @throws \Throwable
	 */
	public function getSender()
	{
		if (!isset($this->_r_sender)) {
			$filters = [];
			if(!is_null($v = $this->getSenderId())){
				$filters['user_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new OZUsersControllerRealR();
			$this->_r_sender = $m->getItem($filters);
		}

		return $this->_r_sender;
	}

	/**
	 * ManyToOne relation between `dy_messages` and `dy_chats`.
	 *
	 * @return null|\DELIVERY\App\Db\DYChat
	 * @throws \Throwable
	 */
	public function getChat()
	{
		if (!isset($this->_r_chat)) {
			$filters = [];
			if(!is_null($v = $this->getChatId())){
				$filters['chat_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYChatsControllerRealR();
			$this->_r_chat = $m->getItem($filters);
		}

		return $this->_r_chat;
	}

	/**
	 * ManyToOne relation between `dy_messages` and `dy_messages`.
	 *
	 * @return null|\DELIVERY\App\Db\DYMessage
	 * @throws \Throwable
	 */
	public function getRefMessage()
	{
		if (!isset($this->_r_ref_message)) {
			$filters = [];
			if(!is_null($v = $this->getRefId())){
				$filters['message_id'] = $v;
			}
			if (empty($filters)){
				return null;
			}

			$m = new DYMessagesControllerRealR();
			$this->_r_ref_message = $m->getItem($filters);
		}

		return $this->_r_ref_message;
	}

	/**
	 * Getter for column `dy_messages`.`id`.
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
	 * Setter for column `dy_messages`.`id`.
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
	 * Getter for column `dy_messages`.`sender_id`.
	 *
	 * @return string the real type is: bigint
	 */
	public function getSenderId()
	{
		$column = self::COL_SENDER_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_messages`.`sender_id`.
	 *
	 * @param string $sender_id
	 *
	 * @return static
	 */
	public function setSenderId($sender_id)
	{
		$column = self::COL_SENDER_ID;
		$this->$column = $sender_id;

		return $this;
	}

	/**
	 * Getter for column `dy_messages`.`chat_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getChatId()
	{
		$column = self::COL_CHAT_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_messages`.`chat_id`.
	 *
	 * @param int $chat_id
	 *
	 * @return static
	 */
	public function setChatId($chat_id)
	{
		$column = self::COL_CHAT_ID;
		$this->$column = $chat_id;

		return $this;
	}

	/**
	 * Getter for column `dy_messages`.`ref_id`.
	 *
	 * @return int the real type is: int
	 */
	public function getRefId()
	{
		$column = self::COL_REF_ID;
		$v = $this->$column;

		if( $v !== null){
			$v = (int)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_messages`.`ref_id`.
	 *
	 * @param int $ref_id
	 *
	 * @return static
	 */
	public function setRefId($ref_id)
	{
		$column = self::COL_REF_ID;
		$this->$column = $ref_id;

		return $this;
	}

	/**
	 * Getter for column `dy_messages`.`type`.
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
	 * Setter for column `dy_messages`.`type`.
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
	 * Getter for column `dy_messages`.`content`.
	 *
	 * @return string the real type is: string
	 */
	public function getContent()
	{
		$column = self::COL_CONTENT;
		$v = $this->$column;

		if( $v !== null){
			$v = (string)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_messages`.`content`.
	 *
	 * @param string $content
	 *
	 * @return static
	 */
	public function setContent($content)
	{
		$column = self::COL_CONTENT;
		$this->$column = $content;

		return $this;
	}

	/**
	 * Getter for column `dy_messages`.`read`.
	 *
	 * @return bool the real type is: bool
	 */
	public function getRead()
	{
		$column = self::COL_READ;
		$v = $this->$column;

		if( $v !== null){
			$v = (bool)$v;
		}

		return $v;
	}

	/**
	 * Setter for column `dy_messages`.`read`.
	 *
	 * @param bool $read
	 *
	 * @return static
	 */
	public function setRead($read)
	{
		$column = self::COL_READ;
		$this->$column = $read;

		return $this;
	}

	/**
	 * Getter for column `dy_messages`.`data`.
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
	 * Setter for column `dy_messages`.`data`.
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
	 * Getter for column `dy_messages`.`add_time`.
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
	 * Setter for column `dy_messages`.`add_time`.
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
	 * Getter for column `dy_messages`.`update_time`.
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
	 * Setter for column `dy_messages`.`update_time`.
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
	 * Getter for column `dy_messages`.`valid`.
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
	 * Setter for column `dy_messages`.`valid`.
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
