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

use Gobl\DBAL\QueryBuilder;
use Gobl\ORM\ORM;
use Gobl\ORM\ORMControllerBase;
use DELIVERY\App\Db\DYTransaction as DYTransactionReal;
use DELIVERY\App\Db\DYTransactionsResults as DYTransactionsResultsReal;
use DELIVERY\App\Db\DYTransactionsQuery as DYTransactionsQueryReal;

/**
 * Class DYTransactionsController
 */
abstract class DYTransactionsController extends ORMControllerBase
{
	/**
	 * DYTransactionsController constructor.
	 *
	 * @inheritdoc
	 */
	public function __construct()
	{
		parent::__construct(
			ORM::getDatabase('DELIVERY\App\Db'),
			DYTransaction::TABLE_NAME,
			DYTransactionReal::class,
			DYTransactionsQueryReal::class,
			DYTransactionsResultsReal::class
		);
	}

	/**
	 * Adds item to `dy_transactions`.
	 *
	 * @param array $values the row values
	 *
	 * @throws \Throwable
	 *
	 * @return \DELIVERY\App\Db\DYTransaction
	 */
	public function addItem(array $values = [])
	{
		/** @var \DELIVERY\App\Db\DYTransaction $result */
		$result = parent::addItem($values);

		return $result;
	}

	/**
	 * Updates one item in `dy_transactions`.
	 *
	 * The returned value will be:
	 * - `false` when the item was not found
	 * - `DYTransaction` when the item was successfully updated,
	 * when there is an error updating you can catch the exception
	 *
	 * @param array $filters    the row filters
	 * @param array $new_values the new values
	 *
	 * @throws \Throwable
	 *
	 * @return bool|\DELIVERY\App\Db\DYTransaction
	 */
	public function updateOneItem(array $filters, array $new_values)
	{
		return parent::updateOneItem($filters, $new_values);
	}

	/**
	 * Updates all items in `dy_transactions` that match the given item filters.
	 *
	 * @param array $filters    the row filters
	 * @param array $new_values the new values
	 *
	 * @throws \Throwable
	 *
	 * @return int affected row count
	 */
	public function updateAllItems(array $filters, array $new_values)
	{
		return parent::updateAllItems($filters, $new_values);
	}

	/**
	 * Deletes one item from `dy_transactions`.
	 *
	 * The returned value will be:
	 * - `false` when the item was not found
	 * - `DYTransaction` when the item was successfully deleted,
	 * when there is an error deleting you can catch the exception
	 *
	 * @param array $filters the row filters
	 *
	 * @throws \Throwable
	 *
	 * @return bool|\DELIVERY\App\Db\DYTransaction
	 */
	public function deleteOneItem(array $filters)
	{
		return parent::deleteOneItem($filters);
	}

	/**
	 * Deletes all items in `dy_transactions` that match the given item filters.
	 *
	 * @param array $filters the row filters
	 *
	 * @throws \Throwable
	 *
	 * @return int affected row count
	 */
	public function deleteAllItems(array $filters)
	{
		return parent::deleteAllItems($filters);
	}

	/**
	 * Gets item from `dy_transactions` that match the given filters.
	 *
	 * The returned value will be:
	 * - `null` when the item was not found
	 * - `DYTransaction` otherwise
	 *
	 * @param array $filters  the row filters
	 * @param array $order_by order by rules
	 *
	 * @throws \Throwable
	 *
	 * @return null|\DELIVERY\App\Db\DYTransaction
	 */
	public function getItem(array $filters, array $order_by = [])
	{
		/* @var null|\DELIVERY\App\Db\DYTransaction $result */
		$result = parent::getItem($filters, $order_by);

		return $result;
	}

	/**
	 * Gets all items from `dy_transactions` that match the given filters.
	 *
	 * @param array    $filters  the row filters
	 * @param null|int $max      maximum row to retrieve
	 * @param int      $offset   first row offset
	 * @param array    $order_by order by rules
	 * @param bool|int $total    total rows without limit
	 *
	 * @throws \Throwable
	 *
	 * @return \DELIVERY\App\Db\DYTransaction[]
	 */
	public function getAllItems(array $filters = [], $max = null, $offset = 0, array $order_by = [], &$total = false)
	{
		/** @var \DELIVERY\App\Db\DYTransaction[] $results */
		$results = parent::getAllItems($filters, $max, $offset, $order_by, $total);

		return $results;
	}

	/**
	 * Gets all items from `dy_transactions` with a custom query builder instance.
	 *
	 * @param \Gobl\DBAL\QueryBuilder $qb
	 * @param null|int                $max    maximum row to retrieve
	 * @param int                     $offset first row offset
	 * @param bool|int                $total  total rows without limit
	 *
	 * @throws \Throwable
	 *
	 * @return \DELIVERY\App\Db\DYTransaction[]
	 */
	public function getAllItemsCustom(QueryBuilder $qb, $max = null, $offset = 0, &$total = false)
	{
		/** @var \DELIVERY\App\Db\DYTransaction[] $results */
		$results = parent::getAllItemsCustom($qb, $max, $offset, $total);

		return $results;
	}
}
