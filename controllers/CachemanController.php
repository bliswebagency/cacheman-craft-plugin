<?php namespace Craft;

class CachemanController extends BaseController
{
	protected $allowAnonymous = true;

	public function getCacheFileDirectory()
	{
		if (defined('CRAFT_STORAGE_PATH')) {
				return CRAFT_STORAGE_PATH . 'runtime' . DIRECTORY_SEPARATOR . 'htmlcache' . DIRECTORY_SEPARATOR;
		}
		// Fallback to default directory
		return dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . 'htmlcache' . DIRECTORY_SEPARATOR;
	}

	public function actionIndex()
	{

		// craft()->htmlcache->clearCacheFiles();
		// Htmlcache_HtmlcacheService::clearCacheFiles();
		$cache = new Htmlcache_HtmlcacheService;
		$cache->clearCacheFiles();
		// $templatesPath = craft()->path->getPluginsPath() . 'cacheman/templates/';
		// craft()->path->setTemplatesPath($templatesPath);

		// $templateData = array();
		
		if (isset($_GET['v'])) {
			$this->renderText('Cleared at '.date("H:i:s d-m-Y"));
		} else {
			$now = \rand();
			$this->refresh(false, '?'.'v');
		}

		craft()->end();
	}
}
