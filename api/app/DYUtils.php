<?php

namespace DELIVERY\App;

use DELIVERY\App\Db\DYDeliverersQuery;
use DELIVERY\App\Db\DYProduct;
use DELIVERY\App\Db\DYCompany;
use DELIVERY\App\Db\DYProductsController;
use OZONE\OZ\Core\Context;
use OZONE\OZ\Core\Hasher;
use OZONE\OZ\Db\OZUser;
use OZONE\OZ\Utils\StringUtils;

class DYUtils
{
	/**
	 * @param \OZONE\OZ\Core\Context $context
	 * @param DYCompany              $entity
	 *
	 * @throws \OZONE\OZ\Exceptions\BaseException
	 * @throws \OZONE\OZ\Exceptions\UnverifiedUserException
	 */
	public static function assertCompanyAccess(Context $context, DYCompany $entity)
	{
		$um = $context->getUsersManager();

		if ($entity->getOwnerId() !== $um->getCurrentUserId()) {
			$um->assertIsAdmin();
		} else {
			$um->assertUserVerified();
		}
	}

	/**
	 * @param \OZONE\OZ\Core\Context $context
	 * @param DYProduct              $entity
	 *
	 * @throws \Throwable
	 */
	public static function assertProductAccess(Context $context, DYProduct $entity)
	{
		$um = $context->getUsersManager();

		if ($entity->getCompany()
				   ->getOwnerId() !== $um->getCurrentUserId()) {
			$um->assertIsAdmin();
		} else {
			$um->assertUserVerified();
		}
	}

	/**
	 * @param \OZONE\OZ\Db\OZUser $user
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public static function isDeliverer(OZUser $user)
	{
		$dq = new DYDeliverersQuery();

		$deliverer = $dq->filterByUserId($user->getId())
						->find()
						->fetchClass();

		return $deliverer && $deliverer->getValid();
	}

	/**
	 * @param \DELIVERY\App\Db\DYProduct $target
	 *
	 * @throws \Gobl\DBAL\Exceptions\DBALException
	 * @throws \Gobl\ORM\Exceptions\ORMException
	 * @throws \Throwable
	 */
	public static function updateProductSlug(DYProduct $target)
	{
		$name          = $target->getName();
		$old_slug      = $target->getSlug();
		$new_slug      = StringUtils::stringToURLSlug($name);
		$new_slug_hash = $new_slug . '-' . strtolower(Hasher::shorten($new_slug));

		if (!$old_slug) {
			$target->setSlug($new_slug)
				   ->save();
		} elseif ($old_slug != $new_slug and $old_slug != $new_slug_hash) {
			$ctrl = new DYProductsController();
			$item = $ctrl->getItem([
				DYProduct::COL_SLUG => $new_slug,
				DYProduct::COL_ID   => [['neq', $target->getId()]]
			]);

			if (!$item) {
				$target->setSlug($new_slug)
					   ->save();
			} else {
				$target->setSlug($new_slug_hash)
					   ->save();
			}
		}
	}
}