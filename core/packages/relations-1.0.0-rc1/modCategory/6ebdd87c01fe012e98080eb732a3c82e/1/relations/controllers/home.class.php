<?php
/**
 * The home manager controller for Relations.
 *
 * @package relations
 */
class RelationsHomeManagerController extends RelationsMainController {
	public function process(array $scriptProperties = array()) {}
	
	public function getPageTitle() { return $this->modx->lexicon('relations'); }
	
	public function loadCustomCssJs() {
		$this->modx->regClientStartupScript($this->Relations->config['jsUrl'].'mgr/widgets/items.grid.js');
		$this->modx->regClientStartupScript($this->Relations->config['jsUrl'].'mgr/widgets/home.panel.js');
		$this->modx->regClientStartupScript($this->Relations->config['jsUrl'].'mgr/sections/home.js');
	}
	
	public function getTemplateFile() {
		return $this->Relations->config['templatesPath'].'home.tpl';
	}
}