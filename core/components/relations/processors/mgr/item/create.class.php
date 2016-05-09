<?php
/**
 * Create an Item
 * 
 * @package relations
 * @subpackage processors
 */
class RelationsItemCreateProcessor extends modObjectCreateProcessor {
	public $classKey = 'RelationsItem';
	public $languageTopics = array('relations');
	public $permission = 'new_document';
	
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('RelationsItem',array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name',$this->modx->lexicon('relations.item_err_ae'));
		}
		return !$this->hasErrors();
	}
	
}

return 'RelationsItemCreateProcessor';