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
 * Class DYExchangesQuery
 */
abstract class DYExchangesQuery extends ORMTableQueryBase
{
	/**
	 * DYExchangesQuery constructor.
	 */
	public function __construct()
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			DYExchange::TABLE_NAME,
			\DELIVERY\App\Db\DYExchangesResults::class
		);
	}

	/**
	 * Finds rows in the table `dy_exchanges` and returns a new instance of the table's result iterator.
	 *
	 * @param null|int $max
	 * @param int      $offset
	 * @param array    $order_by
	 *
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 *
	 * @return \DELIVERY\App\Db\DYExchangesResults
	 */
	public function find($max = null, $offset = 0, array $order_by = [])
	{
		/* @var \DELIVERY\App\Db\DYExchangesResults $results */
		$results = parent::find($max, $offset, $order_by);

		return $results;
	}

	/**
	 * Filters rows with condition on column `id` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterById($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `from` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByFrom($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('from', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `to` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByTo($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('to', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `rate` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByRate($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('rate', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `data` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByData($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('data', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `add_time` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByAddTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('add_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `update_time` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByUpdateTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('update_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `valid` in the table `dy_exchanges`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYExchangesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByValid($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('valid', $value, $operator);
	}

}
