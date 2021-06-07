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

use Gobl\DBAL\Rule;
use Gobl\ORM\ORM;
use Gobl\ORM\ORMTableQueryBase;

/**
 * Class DYMessagesQuery
 */
abstract class DYMessagesQuery extends ORMTableQueryBase
{
	/**
	 * DYMessagesQuery constructor.
	 */
	public function __construct()
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			DYMessage::TABLE_NAME,
			\DELIVERY\App\Db\DYMessagesResults::class
		);
	}

	/**
	 * Finds rows in the table `dy_messages` and returns a new instance of the table's result iterator.
	 *
	 * @param null|int $max
	 * @param int      $offset
	 * @param array    $order_by
	 *
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 *
	 * @return \DELIVERY\App\Db\DYMessagesResults
	 */
	public function find($max = null, $offset = 0, array $order_by = [])
	{
		/* @var \DELIVERY\App\Db\DYMessagesResults $results */
		$results = parent::find($max, $offset, $order_by);

		return $results;
	}

	/**
	 * Filters rows with condition on column `id` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterById($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `sender_id` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterBySenderId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('sender_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `chat_id` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByChatId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('chat_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `ref_id` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByRefId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('ref_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `type` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByType($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('type', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `content` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByContent($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('content', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `read` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByRead($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('read', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `data` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByData($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('data', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `add_time` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByAddTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('add_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `update_time` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByUpdateTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('update_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `valid` in the table `dy_messages`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYMessagesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByValid($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('valid', $value, $operator);
	}

}
