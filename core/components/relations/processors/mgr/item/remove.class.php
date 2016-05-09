<?php
/**
 * Remove an Item.
 * 
 * @package relations
 * @subpackage processors
 */
class RelationsItemRemoveProcessor extends modObjectRemoveProcessor  {
	public $checkRemovePermission = true;
	public $classKey = 'RelationsItem';
	public $languageTopics = array('relations');

}
return 'RelationsItemRemoveProcessor';