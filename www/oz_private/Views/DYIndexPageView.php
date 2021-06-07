<?php

namespace DELIVERY\App\Views;

use DELIVERY\App\DYPageBase;
use DELIVERY\App\DYUtils;
use OZONE\OZ\Exceptions\InvalidFormException;
use OZONE\OZ\Router\RouteInfo;
use OZONE\OZ\Router\Router;

final class DYIndexPageView extends DYPageBase
{
	private $compileData = [];

	/**
	 * @param \OZONE\OZ\Router\RouteInfo $r
	 *
	 * @return \OZONE\OZ\Http\Response
	 * @throws \Throwable
	 */
	public function homeRoute(RouteInfo $r)
	{
		return $this->respond();
	}

	/**
	 * @inheritdoc
	 */
	public static function registerRoutes(Router $router)
	{
		$router->get( '/[{oz_lang}[/]]', function (RouteInfo $r) {
			$i = new self($r);

			return $i->homeRoute($r);
		}, [
			'route:name' => 'dl:home',
			'oz_lang'    => 'en'
		]);
	}

	/**
	 * {@inheritdoc}
	 * @throws \Throwable
	 */
	public function getCompileData()
	{
		return $this->compileData;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getTemplate()
	{
		return 'page.index.otpl';
	}
}