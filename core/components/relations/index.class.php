<?php
/**
 * The main manager controller for Relations.
 *
 * @package relations
 */

require_once dirname(__FILE__) . '/model/relations/relations.class.php';

abstract class RelationsMainController extends modExtraManagerController {
	/** @var Relations $relations */
	public $relations;

	public function initialize() {
		$this->Relations = new Relations($this->modx);
		
		$this->modx->regClientCSS($this->Relations->config['cssUrl'].'mgr.css');
		$this->modx->regClientStartupScript($this->Relations->config['jsUrl'].'mgr/relations.js');
		$this->modx->regClientStartupHTMLBlock('<script type="text/javascript">
		Ext.onReady(function() {
			Relations.config = '.$this->modx->toJSON($this->Relations->config).';
			Relations.config.connector_url = "'.$this->Relations->config['connectorUrl'].'";
		});
		</script>');
		
		return parent::initialize();
	}

	public function getLanguageTopics() {
		return array('relations:default');
	}

	public function checkPermissions() { return true;}
}

class IndexManagerController extends RelationsMainController {
	public static function getDefaultController() { return 'home'; }
}