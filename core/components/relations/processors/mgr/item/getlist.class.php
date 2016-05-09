<?php
/**
 * Get a list of Items
 *
 * @package relations
 * @subpackage processors
 */
class RelationsItemGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'RelationsItem';
	public $defaultSortField = 'id';
	public $defaultSortDirection  = 'DESC';
	public $renderers = '';
	
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		return $c;
	}

	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray();
		return $array;
	}
	
}

return 'RelationsItemGetListProcessor';