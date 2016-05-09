<?php

class msdSaleCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'msdSale';
	public $classKey = 'msdSale';
	public $languageTopics = array('msdiscount');
	public $permission = 'msdiscount_save';


	/** {inheritDoc} */
	public function beforeSet() {
		/** @var msDiscount $msDiscount */
		$msDiscount = $this->modx->getService('msDiscount');

		$properties = $this->getProperties();
		foreach ($properties as $k => $v) {
			$properties[$k] = $msDiscount->sanitize($k, $v);
		}
		$this->setProperties($properties);

		$required = array('name');
		foreach ($required as $v) {
			if ($this->getProperty($v) == '') {
				$this->modx->error->addField($v, $this->modx->lexicon('msd_err_ns'));
			}
		}

		$unique = array('name');
		foreach ($unique as $v) {
			if ($this->modx->getCount($this->classKey, array($v => $this->getProperty($v)))) {
				$this->modx->error->addField($v, $this->modx->lexicon('msd_err_ae'));
			}
		}

		$active = $this->getProperty('active');
		$this->setProperty('active', !empty($active) && $active != 'false');

		return parent::beforeSet();
	}

}

return 'msdSaleCreateProcessor';
