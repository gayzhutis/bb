<?php
require 'update.class.php';

class msdSaleUpdateFromGridProcessor extends msdSaleUpdateProcessor {

	public static function getInstance(modX &$modx,$className,$properties = array()) {
		/** @var modProcessor $processor */
		$processor = new msdSaleUpdateFromGridProcessor($modx,$properties);
		return $processor;
	}


	public function initialize() {
		$data = $this->getProperty('data');
		if (empty($data)) {
			return $this->modx->lexicon('invalid_data');
		}

		$data = $this->modx->fromJSON($data);
		if (empty($data)) {
			return $this->modx->lexicon('invalid_data');
		}

		$this->setProperties($data);
		$this->unsetProperty('data');

		return parent::initialize();
	}


}
return 'msdSaleUpdateFromGridProcessor';