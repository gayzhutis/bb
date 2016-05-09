<?php
/**
 * Relations Connector
 *
 * @package relations
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('relations.core_path',null,$modx->getOption('core_path').'components/relations/');
require_once $corePath.'model/relations/relations.class.php';
$modx->relations = new Relations($modx);

$modx->lexicon->load('relations:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->relations->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));