<?php return array (
  '87e5b229bcd440ac013eb618d4b1452f' => 
  array (
    'criteria' => 
    array (
      'name' => 'ace',
    ),
    'object' => 
    array (
      'name' => 'ace',
      'path' => '{core_path}components/ace/',
      'assets_path' => '',
    ),
  ),
  'd0414d947eec3628c9577bf55bf80210' => 
  array (
    'criteria' => 
    array (
      'name' => 'Ace',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');

$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/html\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'txt\'   => \'text/plain\',
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $mimeType = \'text/html\';
        $modxTags = true;
        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;
        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');
        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }

        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = json_encode($modxTags);
$script = "";
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
    $modx->controller->addHtml(\'<style>.ace_editor {width: 100% !important;}</style>\');
}',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 1,
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
      'content' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');

$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/html\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'txt\'   => \'text/plain\',
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $mimeType = \'text/html\';
        $modxTags = true;
        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;
        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');
        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }

        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = json_encode($modxTags);
$script = "";
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
    $modx->controller->addHtml(\'<style>.ace_editor {width: 100% !important;}</style>\');
}',
    ),
  ),
  'a4320fa0196ea3effeef3e3d83cbb328' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnChunkFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnChunkFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '13b847eaff630b16f44b9b103f0cea48' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnPluginFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnPluginFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '19a04c1c9c7efa7c47eec7b8cdba2820' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnSnipFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnSnipFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '97de3d05ddb292e06fa66e4a49406b27' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnTempFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnTempFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'cbab674acd46b9535e07c3ce97cf66a5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnFileEditFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnFileEditFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '3646db98b7664a0ea049cd23cd31b916' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnFileCreateFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnFileCreateFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '4c53100e48778e18387cc2e986425359' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '59ef36db1bce3b2a1902f0659963c3ad' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnRichTextEditorRegister',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnRichTextEditorRegister',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '386758e51448df89d5696be4a1d6c1bc' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 4,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 4,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '284e39244443d8f062e87c0a9e64393a' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.theme',
    ),
    'object' => 
    array (
      'key' => 'ace.theme',
      'value' => 'chrome',
      'xtype' => 'textfield',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ade4fd069896c4c72a72af0cdb56c9a0' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.font_size',
    ),
    'object' => 
    array (
      'key' => 'ace.font_size',
      'value' => '13px',
      'xtype' => 'textfield',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cef1dcf396b1e53c713aaf25cc64478c' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.word_wrap',
    ),
    'object' => 
    array (
      'key' => 'ace.word_wrap',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '90292998e7e828099f7c7b994d875e18' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.soft_tabs',
    ),
    'object' => 
    array (
      'key' => 'ace.soft_tabs',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c54f0d0b7bc340bc23344c71b7f8289d' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.tab_size',
    ),
    'object' => 
    array (
      'key' => 'ace.tab_size',
      'value' => '4',
      'xtype' => 'textfield',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cd254a1cd1c12cb361337fcd6997c237' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.fold_widgets',
    ),
    'object' => 
    array (
      'key' => 'ace.fold_widgets',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'da44e82a65bf163dbd8b95cc0c864ac0' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.show_invisibles',
    ),
    'object' => 
    array (
      'key' => 'ace.show_invisibles',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '17f5156d2c83255783ac4784fd8c0e6e' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.snippets',
    ),
    'object' => 
    array (
      'key' => 'ace.snippets',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '330a1d8bcb05806d75bbed94ff62ef54' => 
  array (
    'criteria' => 
    array (
      'key' => 'ace.height',
    ),
    'object' => 
    array (
      'key' => 'ace.height',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'ace',
      'area' => 'general',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
);