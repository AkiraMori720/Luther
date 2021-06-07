<?php

namespace DELIVERY\App\Relations;

use DELIVERY\App\Db\DYCategoriesQuery;
use DELIVERY\App\Db\DYCompaniesQuery;
use DELIVERY\App\Db\DYOrdersQuery;
use DELIVERY\App\Db\DYProductsQuery;
use DELIVERY\App\DYUtils;
use OZONE\OZ\Admin\AdminUtils;
use OZONE\OZ\Core\Interfaces\TableRelationsProviderInterface;
use OZONE\OZ\Db\OZUser;
use OZONE\OZ\Db\OZUsersQuery;



class OZUsersRelations implements TableRelationsProviderInterface
{

	/**
	 * @return int
	 * @throws \Exception
	 *
	 */
	public static function countAllCompanies()
	{
		$qb = new DYCompaniesQuery();

		return $qb->filterByValid(true)
				  ->find()
				  ->totalCount();
	}

	/**
	 * @return int
	 * @throws \Exception
	 *
	 */
	public static function countAllProducts()
	{
		$qb = new DYProductsQuery();

		return $qb->filterByValid(true)
				  ->find()
				  ->totalCount();
	}

	/**
	 * @return int
	 * @throws \Exception
	 *
	 */
	public static function countAllOrders()
	{
		$qb = new DYOrdersQuery();

		return $qb->filterByValid(true)
				  ->find()
				  ->totalCount();
	}

	/**
	 * @return int
	 * @throws \Exception
	 *
	 */
	public static function countAllUsers()
	{
		$qb = new OZUsersQuery();

		return $qb->filterByValid(true)
				  ->find()
				  ->totalCount();
	}

	/**
	 * @return \DELIVERY\App\Db\DYCategory[]
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 */
	public static function getAllCategories()
	{
		$qb = new DYCategoriesQuery();

		return $qb->filterByValid(true)
				  ->find()
				  ->fetchAllClass();
	}

	/**
	 * @param \OZONE\OZ\Db\OZUser $target
	 *
	 * @return array
	 * @throws \Exception
	 *
	 */
	public static function infos(OZUser $target)
	{
		$is_admin     = AdminUtils::isAdmin($target->getId());
		$is_deliverer = DYUtils::isDeliverer($target);

		return [
			'is_admin'     => $is_admin,
			'is_deliverer' => $is_deliverer,
			'categories'   => self::getAllCategories()
		];
	}

	/**
	 * @return array
	 * @throws \Exception
	 *
	 */
	public static function stats()
	{
		return [
			'users_totals'     => self::countAllUsers(),
			'companies_totals' => self::countAllCompanies(),
			'orders_totals'    => self::countAllOrders(),
			'products_totals'  => self::countAllProducts(),
		];
	}

	/**
	 * @inheritdoc
	 */
	public static function getRelationsDefinition()
	{
		return [
			OZUser::TABLE_NAME => [
				'infos' => [static::class, 'infos'],
				'stats' => [static::class, 'stats'],
			],
		];
	}
}
