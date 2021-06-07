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
 * Class DYFeesQuery
 */
abstract class DYFeesQuery extends ORMTableQueryBase
{
	/**
	 * DYFeesQuery constructor.
	 */
	public function __construct()
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			DYFee::TABLE_NAME,
			\DELIVERY\App\Db\DYFeesResults::class
		);
	}

	/**
	 * Finds rows in the table `dy_fees` and returns a new instance of the table's result iterator.
	 *
	 * @param null|int $max
	 * @param int      $offset
	 * @param array    $order_by
	 *
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 *
	 * @return \DELIVERY\App\Db\DYFeesResults
	 */
	public function find($max = null, $offset = 0, array $order_by = [])
	{
		/* @var \DELIVERY\App\Db\DYFeesResults $results */
		$results = parent::find($max, $offset, $order_by);

		return $results;
	}

	/**
	 * Filters rows with condition on column `id` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterById($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `order_id` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByOrderId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('order_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `order_line_id` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByOrderLineId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('order_line_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `vat_id` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByVatId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('vat_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `delivery_id` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByDeliveryId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('delivery_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `type` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByType($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('type', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `amount` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByAmount($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('amount', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `currency_code` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByCurrencyCode($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('currency_code', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `exchange_id` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByExchangeId($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('exchange_id', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `before_vat` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByBeforeVat($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('before_vat', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `data` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByData($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('data', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `add_time` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByAddTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('add_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `update_time` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByUpdateTime($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('update_time', $value, $operator);
	}

	/**
	 * Filters rows with condition on column `valid` in the table `dy_fees`.
	 *
	 * @param mixed  $value    the filter value
	 * @param int    $operator the operator to use
	 *
	 * @return $this|\DELIVERY\App\Db\DYFeesQuery
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public function filterByValid($value, $operator = Rule::OP_EQ)
	{
		return $this->filterBy('valid', $value, $operator);
	}

}
