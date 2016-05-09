<?php return array (
  'e9557f6607198dea2487f1342490f808' => 
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
  'b921c9e682ea49a281083eb742dfc656' => 
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
  '798b0d49cb18da40a5c809c3180b1bfb' => 
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
  'b6cefc96c2d0bacee180f0428826c984' => 
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
  '277d8e5d98684332191f0e94a50b2a83' => 
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
  '021aa9dd1b14a36a907ed041dc017bc3' => 
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
  '65bf69bbb2a3212b30dfedaa2b2c086a' => 
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