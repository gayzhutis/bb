<?php
/**
 * Update an Item
 * 
 * @package relations
 * @subpackage processors
 */
class RelationsItemUpdateProcessor extends modObjectUpdateProcessor {
	public $classKey = 'RelationsItem';
	public $languageTopics = array('relations');
	public $permission = 'update_document';
}

return 'RelationsItemUpdateProcessor';