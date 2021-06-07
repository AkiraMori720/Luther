<?php

/**
 * Copyright (c) 2017-present, Emile Silas Sare
 *
 * This file is part of OZone package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


// Auto generated file
//
// WARNING: please don't edit,
//
// Proudly With: O'Zone v2.0.0
// Time: 1622529621
namespace DELIVERY\App\Services;

use Gobl\DBAL\Relations\CallableVR;
use Gobl\DBAL\Relations\Relation;
use Gobl\DBAL\Relations\VirtualRelation;
use Gobl\DBAL\Types\TypeBigint;
use Gobl\DBAL\Types\TypeInt;
use Gobl\ORM\ORM;
use DELIVERY\App\Db\DYPubsController;
use DELIVERY\App\Db\DYPub;
use OZONE\OZ\Core\BaseService;
use OZONE\OZ\Core\ORMRequest;
use OZONE\OZ\Exceptions\NotFoundException;
use OZONE\OZ\Router\RouteInfo;
use OZONE\OZ\Router\Router;

/**
 * Class DYPubsService
 *
 * to add item to pubs
 * - POST    /pubs
 *
 * to update property(ies) of the item with the given :pub_id
 * - PATCH     /pubs/:pub_id
 *
 * to update property(ies) of all items in `dy_pubs`
 * - PATCH     /pubs
 *
 * to delete item with the given :pub_id
 * - DELETE  /pubs/:pub_id
 *
 * to delete all items in `dy_pubs`
 * - DELETE  /pubs
 *
 * to get the item with the given :pub_id
 * - GET     /pubs/:pub_id
 *
 * to get all items in dy_pubs
 * - GET     /pubs
 *
 * to get relation for the item in `dy_pubs` with the given :pub_id
 * - GET     /pubs/:pub_id/relation
 */
final class DYPubsService extends BaseService
{
	//========================================================
	//=	POST REQUEST METHODS
	//========================================================

	/**
	 * Creates a new entry in the table `dy_pubs`
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionCreateEntity(ORMRequest $orm_request)
	{
		$values = $orm_request->getFormData(self::table());

		$controller = new DYPubsController();
		$entity     = $controller->addItem($values);

		$this->getResponseHolder()
			 ->setDone($controller->getCRUD()
								  ->getMessage())
			 ->setData(['item' => $entity]);
	}

	//========================================================
	//=	PATCH REQUEST METHODS
	//========================================================

	/**
	 * Updates only one item in the table `dy_pubs` that matches some filters
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionUpdateOneItem(ORMRequest $orm_request)
	{
		$orm_request = $orm_request->createScopedInstance(self::table());
		$values      = $orm_request->getFormData();
		$filters     = $orm_request->getFilters();

		$controller = new DYPubsController();
		$entity     = $controller->updateOneItem($filters, $values);

		if ($entity instanceof DYPub) {
			$this->getResponseHolder()
				 ->setDone($controller->getCRUD()
									  ->getMessage())
				 ->setData(['item' => $entity]);
		} else {
			throw new NotFoundException();
		}
	}

	/**
	 * Updates all items in the table `dy_pubs` that matches some filters
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionUpdateAllItems(ORMRequest $orm_request)
	{
		$orm_request = $orm_request->createScopedInstance(self::table());
		$values      = $orm_request->getFormData();
		$filters     = $orm_request->getFilters();

		$controller = new DYPubsController();
		$count      = $controller->updateAllItems($filters, $values);

		$this->getResponseHolder()
			 ->setDone($controller->getCRUD()
								  ->getMessage())
			 ->setData(['affected' => $count]);
	}

	//========================================================
	//=	DELETE REQUEST METHODS
	//========================================================

	/**
	 * Deletes only one item in the table `dy_pubs` that matches some filters
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionDeleteEntity(ORMRequest $orm_request)
	{
		$filters = $orm_request->getFilters(self::table());

		$controller = new DYPubsController();
		$entity     = $controller->deleteOneItem($filters);

		if ($entity instanceof DYPub) {
			$this->getResponseHolder()
				 ->setDone($controller->getCRUD()
									  ->getMessage())
				 ->setData(['item' => $entity]);
		} else {
			throw new NotFoundException();
		}
	}

	/**
	 * Deletes all items in the table `dy_pubs` that matches some filters
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionDeleteAll(ORMRequest $orm_request)
	{
		$filters = $orm_request->getFilters(self::table());

		$controller = new DYPubsController();
		$count      = $controller->deleteAllItems($filters);

		$this->getResponseHolder()
			 ->setDone($controller->getCRUD()
								  ->getMessage())
			 ->setData(['affected' => $count]);
	}

	//========================================================
	//=	GET REQUEST METHODS
	//========================================================

	/**
	 * Gets only one item from the table `dy_pubs` that matches some filters
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionGetEntity(ORMRequest $orm_request)
	{
		$orm_request = $orm_request->createScopedInstance(self::table());
		$filters     = $orm_request->getFilters();
		$order_by    = $orm_request->getOrderBy();

		$controller = new DYPubsController();
		$entity     = $controller->getItem($filters, $order_by);

		if (!$entity) {
			throw new NotFoundException();
		}

		$relations = $this->listEntityRelations($entity, $orm_request);

		$this->getResponseHolder()
			 ->setDone($controller->getCRUD()
								  ->getMessage())
			 ->setData([
			 	'item'      => $entity,
			 	'relations' => $relations,
			 ]);
	}

	/**
	 * Gets all items from the table `dy_pubs` that matches some filters
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionGetAll(ORMRequest $orm_request)
	{
		$collection = $orm_request->getCollection();

		$orm_request   = $orm_request->createScopedInstance(self::table());
		$filters       = $orm_request->getFilters();
		$order_by      = $orm_request->getOrderBy();
		$max           = $orm_request->getMax();
		$offset        = $orm_request->getOffset();
		$page          = $orm_request->getPage();
		$total_records = 0;

		$controller = new DYPubsController();

		if ($collection) {
			$table      = ORM::getDatabase('DELIVERY\App\Db')
							 ->getTable(DYPub::TABLE_NAME);
			$collection = $table->getCollection($orm_request->getCollection());

			if (!$collection) {
				throw new NotFoundException();
			}

			$results = $collection->run($orm_request, $total_records);
		} else {
			$results = $controller->getAllItems($filters, $max, $offset, $order_by, $total_records);
		}

		$relations = [];

		if (\count($results)) {
			$relations = $this->listEntitiesRelations($results, $orm_request);
		}

		$this->getResponseHolder()
			 ->setDone($controller->getCRUD()
								  ->getMessage())
			 ->setData([
			 	'items'     => $results,
			 	'max'       => $max,
			 	'page'      => $page,
			 	'total'     => $total_records,
			 	'relations' => $relations,
			 ]);
	}

	/**
	 * Gets relation item(s) that matches some filters
	 *
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 *
	 * @throws \Throwable
	 */
	public function actionGetRelation(ORMRequest $orm_request)
	{
		if (!$orm_request->getColumnFilters(DYPub::COL_ID)) {
			throw new NotFoundException();
		}

		$filters      = $orm_request->getFilters(self::table());
		$req_rel_name = $orm_request->getRelations()[0];

		$controller = new DYPubsController();
		$entity     = $controller->getItem($filters);

		if (!$entity) {
			throw new NotFoundException();
		}

		$max           = $orm_request->getMax();
		$page          = $orm_request->getPage();
		$total_records = 0;

		$relations = $this->listEntityRelations($entity, $orm_request, $total_records);
		$r         = $relations[$req_rel_name];

		if (\is_array($r)) {
			$data = [
				'items' => $r,
				'max'   => $max,
				'page'  => $page,
				'total' => $total_records,
			];
		} else {
			$data = [
				'item' => $r,
			];
		}

		$this->getResponseHolder()
			 ->setDone()
			 ->setData($data);
	}

	/**
	 * @param \DELIVERY\App\Db\DYPub        $entity
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 * @param int                       &$total_records
	 *
	 * @throws \OZONE\OZ\Exceptions\NotFoundException
	 *
	 * @return array
	 */
	private function listEntityRelations(DYPub $entity, ORMRequest $orm_request, &$total_records = null)
	{
		$query_relations = $orm_request->getRelations();
		$relations       = [];

		if (!empty($query_relations)) {
			$rel_map = $this->resolveRelations($query_relations);

			foreach ($rel_map as $name => $rel) {
				if ($rel instanceof Relation) {
					/*@var Relation $rel */
					$rel_type = $rel->getType();

					if ($rel_type === Relation::ONE_TO_MANY || $rel_type === Relation::MANY_TO_MANY) {
						$relations[$name] = $this->getRelationItemsList($rel, $entity, $orm_request, $total_records);
					} else {
						$relations[$name] = $this->getRelationItem($rel, $entity);
					}
				} elseif ($rel instanceof VirtualRelation) {
					/*@var VirtualRelation $rel */
					$relations[$name] = $rel->run($entity, $orm_request, $total_records);
				}
			}
		}

		return $relations;
	}

	/**
	 * @param \DELIVERY\App\Db\DYPub[]      $entities
	 * @param \OZONE\OZ\Core\ORMRequest $orm_request
	 * @param int                       &$total_records
	 *
	 * @throws \OZONE\OZ\Exceptions\NotFoundException
	 *
	 * @return array
	 */
	private function listEntitiesRelations(array $entities, ORMRequest $orm_request, &$total_records = null)
	{
		$query_relations = $orm_request->getRelations();
		$relations       = [];

		if (!empty($query_relations)) {
			$rel_map = $this->resolveRelations($query_relations);

			foreach ($rel_map as $name => $rel) {
				if ($rel instanceof Relation) {
					foreach ($entities as $entity) {
						$arr      = $entity->asArray(false);
						$id       = $arr[DYPub::COL_ID];
						$rel_type = $rel->getType();

						if ($rel_type === Relation::ONE_TO_MANY || $rel_type === Relation::MANY_TO_MANY) {
							$relations[$name][$id] = $this->getRelationItemsList(
								$rel,
								$entity,
								$orm_request,
								$total_records
							);
						} else {
							$relations[$name][$id] = $this->getRelationItem($rel, $entity);
						}
					}
				} elseif ($rel instanceof VirtualRelation) {
					if ($rel instanceof CallableVR && $rel->canHandleList()) {
						$relations[$name] = $rel->run($entities, $orm_request, $total_records);
					} else {
						foreach ($entities as $entity) {
							$arr                   = $entity->asArray(false);
							$id                    = $arr[DYPub::COL_ID];
							$relations[$name][$id] = $rel->run($entity, $orm_request, $total_records);
						}
					}
				}
			}
		}

		return $relations;
	}

	/**
	 * @param \Gobl\DBAL\Relations\Relation $relation
	 * @param \DELIVERY\App\Db\DYPub            $entity
	 * @param \OZONE\OZ\Core\ORMRequest     $orm_request
	 * @param int                           $total_records
	 *
	 * @return array
	 */
	private function getRelationItemsList(
		Relation $relation,
		DYPub $entity,
		ORMRequest $orm_request,
		&$total_records = null
	) {
		$target_columns_map = [];
		$target             = $relation->getTargetTable();
		$target_columns     = $target->getColumns();
		$orm_request        = $orm_request->createScopedInstance($target);

		foreach ($target_columns as $column) {
			$target_columns_map[$column->getFullName()] = 1;
		}

		$relation_getter = $relation->getGetterName();

		return \call_user_func_array([
			$entity,
			$relation_getter,
		], [
			$orm_request->getFilters(),
			$orm_request->getMax(),
			$orm_request->getOffset(),
			$orm_request->getOrderBy(),
			&$total_records,
		]);
	}

	/**
	 * @param \Gobl\DBAL\Relations\Relation $relation
	 * @param \DELIVERY\App\Db\DYPub            $entity
	 *
	 * @return mixed
	 */
	private function getRelationItem(Relation $relation, DYPub $entity)
	{
		$filters          = [];
		$relation_columns = $relation->getRelationColumns();
		$entity_data      = $entity->asArray();

		foreach ($relation_columns as $from => $target) {
			$filters[$target] = $entity_data[$from];
		}

		$relation_getter = $relation->getGetterName();

		return \call_user_func([$entity, $relation_getter]);
	}

	/**
	 * @param array $relations
	 *
	 * @throws \OZONE\OZ\Exceptions\NotFoundException
	 *
	 * @return array
	 */
	private function resolveRelations(array $relations)
	{
		$table   = ORM::getDatabase('DELIVERY\App\Db')
					  ->getTable(DYPub::TABLE_NAME);
		$missing = [];
		$rel_map = [];

		// we firstly check all relation
		foreach ($relations as $name) {
			if ($table->hasRelation($name)) {
				$rel_map[$name] = $table->getRelation($name);
			} elseif ($table->hasVirtualRelation($name)) {
				$rel_map[$name] = $table->getVirtualRelation($name);
			} else {
				$missing[] = $name;
			}
		}

		// checks if there are missing relations
		if (\count($missing)) {
			throw new NotFoundException(null, ['RELATIONS_MISSING', $missing]);
		}

		return $rel_map;
	}

	/**
	 * @return \Gobl\DBAL\Table
	 */
	public static function table()
	{
		return ORM::getDatabase('DELIVERY\App\Db')
				  ->getTable(DYPub::TABLE_NAME);
	}

	/**
	 * @inheritdoc
	 */
	public static function registerRoutes(Router $router)
	{
		$type_obj    = self::table()
						   ->getColumn(DYPub::COL_ID)
						   ->getTypeObject();
		$bigint_type = TypeBigint::class;
		$int_type    = TypeInt::class;
		$is_number   = ($type_obj instanceof $bigint_type || $type_obj instanceof $int_type);

		$options = [
			'pub_id'    => $is_number ? '[0-9]+' : '[^/]+',
			'relation' => Relation::NAME_PATTERN,
		];

		$router->post('/pubs', function (RouteInfo $r) {
			$context     = $r->getContext();
			$orm_request = new ORMRequest($context, $context->getRequest()
															->getFormData());

			$service = new self($context);
			$service->actionCreateEntity($orm_request);

			return $service->respond();
		}, $options)
			   ->get('/pubs/{pub_id}', function (RouteInfo $r) {
			   	$context     = $r->getContext();
			   	$orm_request = new ORMRequest($context, $context->getRequest()
																   ->getFormData());
			   	$orm_request->addColumnFilter('pub_id', $r->getArg('pub_id'));
			   	$service = new self($context);
			   	$service->actionGetEntity($orm_request);

			   	return $service->respond();
			   }, $options)
			   ->get('/pubs', function (RouteInfo $r) {
			   	$context     = $r->getContext();
			   	$orm_request = new ORMRequest($context, $context->getRequest()
																   ->getFormData());
			   	$service     = new self($context);
			   	$service->actionGetAll($orm_request);

			   	return $service->respond();
			   }, $options)
			   ->get('/pubs/{pub_id}/{relation}', function (RouteInfo $r) {
			   	$context     = $r->getContext();
			   	$orm_request = new ORMRequest($context, $context->getRequest()
																   ->getFormData());
			   	$orm_request->addColumnFilter('pub_id', $r->getArg('pub_id'));
			   	$orm_request->addRelation($r->getArg('relation'));

			   	$service = new self($context);
			   	$service->actionGetRelation($orm_request);

			   	return $service->respond();
			   }, $options)
			   ->patch('/pubs/{pub_id}', function (RouteInfo $r) {
			   	$context     = $r->getContext();
			   	$orm_request = new ORMRequest($context, $context->getRequest()
																   ->getFormData());
			   	$orm_request->addColumnFilter('pub_id', $r->getArg('pub_id'));

			   	$service = new self($context);
			   	$service->actionUpdateOneItem($orm_request);

			   	return $service->respond();
			   }, $options)
			   ->patch('/pubs', function (RouteInfo $r) {
			   	$context     = $r->getContext();
			   	$orm_request = new ORMRequest($context, $context->getRequest()
																   ->getFormData());
			   	$service     = new self($context);
			   	$service->actionUpdateAllItems($orm_request);

			   	return $service->respond();
			   }, $options)
			   ->delete('/pubs/{pub_id}', function (RouteInfo $r) {
			   	$context     = $r->getContext();
			   	$orm_request = new ORMRequest($context, $context->getRequest()
																   ->getFormData());
			   	$orm_request->addColumnFilter('pub_id', $r->getArg('pub_id'));

			   	$service = new self($context);
			   	$service->actionDeleteEntity($orm_request);

			   	return $service->respond();
			   }, $options)
			   ->delete('/pubs', function (RouteInfo $r) {
			   	$context     = $r->getContext();
			   	$orm_request = new ORMRequest($context, $context->getRequest()
																   ->getFormData());
			   	$orm_request->addColumnFilter('pub_id', $r->getArg('pub_id'));

			   	$service = new self($context);
			   	$service->actionDeleteAll($orm_request);

			   	return $service->respond();
			   }, $options);
	}
}
