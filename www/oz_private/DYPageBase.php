<?php

namespace DELIVERY\App;

use OZONE\OZ\Web\WebViewBase;

abstract class DYPageBase extends WebViewBase
{
	/**
	 * @return string
	 * @throws \Throwable
	 */
	public function getSEOPageTitle()
	{
		$parts[] = "Luthorr";

		return implode(" | ", $parts);
	}

	public function getSEOPageImage()
	{
		return $this->oz->buildUri('/assets/vendors/images/luthorr.png');
	}

	public function getSEOPageDescription()
	{
		return $this->oz->i18n('CS_LANG_SEO_DESCRIPTION');
	}

	public function getSEOPageName()
	{
		return 'Luthorr';
	}

	public function getSEOOGSiteName()
	{
		return 'Luthorr';
	}

	public function getSEOPageAuthor()
	{
		return 'luthorr.com';
	}

	public function getSEOPageKeywords()
	{
		return ['Luthorr', 'Delivery', 'Food'];
	}
}