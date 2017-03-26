<?php namespace Craft;

class CachemanPlugin extends BasePlugin
{
	public function getName()
	{
		return 'Cacheman';
	}

	public function getVersion()
	{
		return '1.0.0';
	}

	public function getDeveloper()
	{
		return 'Blis Web Agency Pty Ltd';
	}

	public function getDeveloperUrl()
	{
		return 'https://blisweb.agency';
	}

	public function registerSiteRoutes()
	{
		return array(
			'cacheman' => array('action' => 'cacheman/index'),
		);
	}
}
