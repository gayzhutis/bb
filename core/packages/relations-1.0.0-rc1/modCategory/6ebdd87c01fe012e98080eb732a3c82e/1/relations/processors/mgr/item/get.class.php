<?php
/**
 * Get an Item
 * 
 * @package relations
 * @subpackage processors
 */
class RelationsItemGetProcessor extends modObjectGetProcessor {
	public $classKey = 'RelationsItem';
	public $languageTopics = array('relations:default');
	public $objectType = 'relations';
}

return 'RelationsItemGetProcessor';