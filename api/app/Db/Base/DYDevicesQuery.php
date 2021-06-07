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
 * Class DYDevicesQuery
 */
abstract class DYDevicesQuery extends ORMTableQueryBase
{
	/**
	 * DYDevicesQuery constructor.
	 */
	public function __construct()
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			DYDevice::TABLE_NAME,
			\DELIVERY\App\Db\DYDevicesResults::class
		);
	}

	/**
	 * Finds rows in the table `dy_devices` and returns a new instance of the table's result iterator.
	 *
	 * @param null|int $max
	 * @param int      $offset
	 * @param array    $order_by
	 *
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 *
	 * @return \DELIVERY\App\Db\DYDevicesResults
	 */
	public function find($max = null, $offset = 0, array $order_by = [])
	{
		/* @var \DELIVERY\App\Db\DYDevicesResults $results */
		$results = parent::find($max, $offset, $order_by);

		return $results;
	}

	/**
	 * Filters rows with condition on column `id` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterById($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `user_id` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByUserId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('user_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `os` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByOs($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('os', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `app` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByApp($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('app', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `key` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByKey($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('key', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `data` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByData($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('data', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `add_time` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByAddTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('add_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `update_time` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByUpdateTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('update_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `valid` in the table `dy_devices`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYDevicesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByValid($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('valid', $value, $operator);
	}

}
