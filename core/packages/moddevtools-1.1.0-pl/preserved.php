<?php return array (
  '6bbaf33c6f3593ab063399f8e6e98bab' => 
  array (
    'criteria' => 
    array (
      'name' => 'moddevtools',
    ),
    'object' => 
    array (
      'name' => 'moddevtools',
      'path' => '{core_path}components/moddevtools/',
      'assets_path' => '{base_path}extras/modDevTools/assets/components/moddevtools/',
    ),
  ),
  '5cdb14e78d1c19920e3b4791ac27a8d2' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'moddevtools',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 4,
      'namespace' => 'moddevtools',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'moddevtools:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  '102d79bed38a7e077b6df9b949e723a2' => 
  array (
    'criteria' => 
    array (
      'text' => 'moddevtools',
    ),
    'object' => 
    array (
      'text' => 'moddevtools',
      'parent' => 'components',
      'action' => '4',
      'description' => 'moddevtools_menu_desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => 'view_chunk,view_template',
      'namespace' => 'core',
    ),
  ),
  '6173181f4662da9b0be4ff16601e4662' => 
  array (
    'criteria' => 
    array (
      'category' => 'modDevTools',
    ),
    'object' => 
    array (
      'id' => 5,
      'parent' => 0,
      'category' => 'modDevTools',
    ),
  ),
  '6f771cac76a403d1fc78836efed3ebdc' => 
  array (
    'criteria' => 
    array (
      'name' => 'modDevTools',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'modDevTools',
      'description' => '',
      'editor_type' => 0,
      'category' => 5,
      'cache_type' => 0,
      'plugincode' => '/**
 * modDevTools
 *
 * Copyright 2014 by Vitaly Kireev <kireevvit@gmail.com>
 *
 * @package moddevtools
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 */

/**
 * @var modx $modx
 */
$path = $modx->getOption(\'moddevtools_core_path\',null,$modx->getOption(\'core_path\').\'components/moddevtools/\').\'model/moddevtools/\';
/**
 * @var modDevTools $devTools
 */
$devTools = $modx->getService(\'devTools\',\'modDevTools\',$path, array(\'debug\' => false));
$eventName = $modx->event->name;

switch($eventName) {
    case \'OnDocFormSave\':
        $devTools->debug(\'Start OnDocFormSave\');
        $devTools->parseContent($resource);
        break;
    case \'OnTempFormSave\':
        $devTools->debug(\'Start OnTempFormSave\');
        $devTools->parseContent($template);
        break;
    case \'OnTVFormSave\':

        break;
    case \'OnChunkFormSave\':
        $devTools->debug(\'Start OnChunkFormSave\');
        $devTools->parseContent($chunk);
        break;
    case \'OnSnipFormSave\':

        break;
    /* Add tabs */
    case \'OnDocFormPrerender\':
        if ($modx->event->name == \'OnDocFormPrerender\') {
            $devTools->getBreadCrumbs($scriptProperties);
            return;
        }
        break;

    case \'OnTempFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Template\');
        }
        break;

    case \'OnTVFormPrerender\':
        break;


    case \'OnChunkFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Chunk\');
        }
        break;

    case \'OnSnipFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Snippet\');
        }
        break;


}

if (isset($result) && $result === true)
    return;
elseif (isset($result)) {
    $modx->log(modX::LOG_LEVEL_ERROR,\'[modDevTools] An error occured. Event: \'.$eventName.\' - Error: \'.($result === false) ? \'undefined error\' : $result);
    return;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/moddevtools/elements/plugins/plugin.moddevtools.php',
      'content' => '/**
 * modDevTools
 *
 * Copyright 2014 by Vitaly Kireev <kireevvit@gmail.com>
 *
 * @package moddevtools
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 */

/**
 * @var modx $modx
 */
$path = $modx->getOption(\'moddevtools_core_path\',null,$modx->getOption(\'core_path\').\'components/moddevtools/\').\'model/moddevtools/\';
/**
 * @var modDevTools $devTools
 */
$devTools = $modx->getService(\'devTools\',\'modDevTools\',$path, array(\'debug\' => false));
$eventName = $modx->event->name;

switch($eventName) {
    case \'OnDocFormSave\':
        $devTools->debug(\'Start OnDocFormSave\');
        $devTools->parseContent($resource);
        break;
    case \'OnTempFormSave\':
        $devTools->debug(\'Start OnTempFormSave\');
        $devTools->parseContent($template);
        break;
    case \'OnTVFormSave\':

        break;
    case \'OnChunkFormSave\':
        $devTools->debug(\'Start OnChunkFormSave\');
        $devTools->parseContent($chunk);
        break;
    case \'OnSnipFormSave\':

        break;
    /* Add tabs */
    case \'OnDocFormPrerender\':
        if ($modx->event->name == \'OnDocFormPrerender\') {
            $devTools->getBreadCrumbs($scriptProperties);
            return;
        }
        break;

    case \'OnTempFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Template\');
        }
        break;

    case \'OnTVFormPrerender\':
        break;


    case \'OnChunkFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Chunk\');
        }
        break;

    case \'OnSnipFormPrerender\':
        if ($mode == modSystemEvent::MODE_UPD) {
            $result = $devTools->outputTab(\'Snippet\');
        }
        break;


}

if (isset($result) && $result === true)
    return;
elseif (isset($result)) {
    $modx->log(modX::LOG_LEVEL_ERROR,\'[modDevTools] An error occured. Event: \'.$eventName.\' - Error: \'.($result === false) ? \'undefined error\' : $result);
    return;
}',
    ),
  ),
  '2103b985f06163f71bd392feeba01ef9' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnTempFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnTempFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '866f65d93064312a928c8e9d13a02e51' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'b708d9d4e88b38bfa2fd74907be8d80a' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnChunkFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnChunkFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c739b40cdcf31e065647ef125e4194fd' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnSnipFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnSnipFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '5ca871516b17176ff24d904ba9bd21dd' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnTempFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnTempFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '259a0aa55582e6be931846eb567a01ad' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'e4248d4703923cd7b695aaf4660a921a' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnChunkFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnChunkFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);