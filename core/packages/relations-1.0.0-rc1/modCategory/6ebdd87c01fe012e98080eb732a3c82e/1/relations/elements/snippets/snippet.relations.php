<?php
/**
 * The base Relations snippet.
 *
 * @package relations
 */
$Relations = $modx->getService('relations','Relations',$modx->getOption('relations.core_path',null,$modx->getOption('core_path').'components/relations/').'model/relations/',$scriptProperties);
if (!($Relations instanceof Relations)) return '';

/**
 * Do your snippet code here. This demo grabs 5 items from our custom table.
 */
$tpl = $modx->getOption('tpl',$scriptProperties,'Item');
$sortBy = $modx->getOption('sortBy',$scriptProperties,'name');
$sortDir = $modx->getOption('sortDir',$scriptProperties,'ASC');
$limit = $modx->getOption('limit',$scriptProperties,5);
$outputSeparator = $modx->getOption('outputSeparator',$scriptProperties,"\n");

/* build query */
$c = $modx->newQuery('RelationsItem');
$c->sortby($sortBy,$sortDir);
$c->limit($limit);
$items = $modx->getCollection('RelationsItem',$c);

/* iterate through items */
$list = array();
foreach ($items as $item) {
	$itemArray = $item->toArray();
	$list[] = $Relations->getChunk($tpl,$itemArray);
}

/* output */
$output = implode($outputSeparator,$list);
$toPlaceholder = $modx->getOption('toPlaceholder',$scriptProperties,false);
if (!empty($toPlaceholder)) {
	/* if using a placeholder, output nothing and set output to specified placeholder */
	$modx->setPlaceholder($toPlaceholder,$output);
	return '';
}
/* by default just return output */
return $output;