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
 * Class DYDeliveriesQuery
 */
abstract class DYDeliveriesQuery extends ORMTableQueryBase
{
	/**
	 * DYDeliveriesQuery constructor.
	 */
	public function __construct()
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			DYDelivery::TABLE_NAME,
			\DELIVERY\App\Db\DYDeliveriesResults::class
		);
	}

	/**
	 * Finds rows in the table `dy_deliveries` and returns a new instance of the table's result iterator.
	 *
	 * @param null|int $max
	 * @param int      $offset
	 * @param array    $order_by
	 *
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 *
	 * @return \DELIVERY\App\Db\DYDeliveriesResults
	 */
	public function find($max = null, $offset = 0, array $order_by = [])
	{
		/* @var \DELIVERY\App\Db\DYDeliveriesResults $results */
		$results = parent::find($max, $offset, $order_by);

		return $results;
	}

	/**
	 * Filters rows with condition on column `id` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterById($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `user_id` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByUserId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('user_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `order_id` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByOrderId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('order_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `state` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByState($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('state', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `stars` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByStars($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('stars', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `data` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByData($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('data', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `add_time` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByAddTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('add_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `update_time` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByUpdateTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('update_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `valid` in the table `dy_deliveries`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDeliveriesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByValid($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('valid', $value, $operator);
	}

}
