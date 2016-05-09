<?php return array (
  'fda58784b9b38596be8a9dbb7cf27561' => 
  array (
    'criteria' => 
    array (
      'name' => 'hybridauth',
    ),
    'object' => 
    array (
      'name' => 'hybridauth',
      'path' => '{core_path}components/hybridauth/',
      'assets_path' => '',
    ),
  ),
  '94879ae03a61286bf8f16cbfa59527d1' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Yandex',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Yandex',
      'value' => '{"id":"12345","secret":"12345"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '47b9a2574dbb5450d8e75a47c447e1e1' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Twitter',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Twitter',
      'value' => '{"key":"ZH5tJGOam1H3z2fFMb0CQEs7t","secret":"AujR2fByZGHX4MPyes9whzEDJs9x3JinHowQUYBReVOayA4qPh"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2015-07-30 16:04:15',
    ),
  ),
  'f581ff4a38782a95826a2a1538b0fb5f' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Google',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Google',
      'value' => '{"id":"999716876478-au62bbhqm7sgq8i7cltaprpm9ag935t5.apps.googleusercontent.com","secret":"l4gOEFjSHdHiCEaSDCt9OMs2"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2015-07-30 18:47:37',
    ),
  ),
  'e833a7b8ef4cab770862d54cc8748fcf' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Facebook',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Facebook',
      'value' => '{"id":"415614618628356","secret":"84120cbb1306a261ae427d7cd0dbc54d"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2015-07-29 15:10:39',
    ),
  ),
  'c0c3e93cb1470a49099517b9f16a7f92' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Vkontakte',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Vkontakte',
      'value' => '{"id":"4926777","secret":"nqGsPIXSOfIBK3aSnwWY"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2015-05-21 15:45:27',
    ),
  ),
  '42e355bc61fafdc8c756b6ee3f409287' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.register_users',
    ),
    'object' => 
    array (
      'key' => 'ha.register_users',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'hybridauth',
      'area' => 'ha.main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5f35d07eb4ee542409c760ccaf02fe60' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.frontend_css',
    ),
    'object' => 
    array (
      'key' => 'ha.frontend_css',
      'value' => '[[+assetsUrl]]css/web/default.css',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '21e882b37cf25c16943c249d3c73bfd4' => 
  array (
    'criteria' => 
    array (
      'category' => 'HybridAuth',
    ),
    'object' => 
    array (
      'id' => 30,
      'parent' => 0,
      'category' => 'HybridAuth',
    ),
  ),
  'fa05805201f8b3baf983be3403494db0' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.login',
    ),
    'object' => 
    array (
      'id' => 170,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.login',
      'description' => 'Chunk for guest',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'snippet' => '[[%ha.login_intro]]
<br/>
[[+providers]]

[[+error:notempty=`<div class="alert alert-block alert-error">[[+error]]</div>`]]',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.login.tpl',
      'content' => '[[%ha.login_intro]]
<br/>
[[+providers]]

[[+error:notempty=`<div class="alert alert-block alert-error">[[+error]]</div>`]]',
    ),
  ),
  'eb5629816dba03cfe9bf19e9541a46cb' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.logout',
    ),
    'object' => 
    array (
      'id' => 171,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.logout',
      'description' => 'Chunk for logged in',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'snippet' => '<div class="hybridauth">
	<img src="[[+gravatar]]?s=75" alt="[[+username]]" title="[[+fullname]]"  class="ha-avatar" />

	<span class="ha-info">
		[[%ha.greeting]] <b>[[+username]]</b> ([[+fullname]])! <a href="[[+logout_url]]">[[%ha.logout]]</a>
		<br/><br/>
		<small>[[%ha.providers_available]]</small><br/>
		[[+providers]]
	</span>

</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.logout.tpl',
      'content' => '<div class="hybridauth">
	<img src="[[+gravatar]]?s=75" alt="[[+username]]" title="[[+fullname]]"  class="ha-avatar" />

	<span class="ha-info">
		[[%ha.greeting]] <b>[[+username]]</b> ([[+fullname]])! <a href="[[+logout_url]]">[[%ha.logout]]</a>
		<br/><br/>
		<small>[[%ha.providers_available]]</small><br/>
		[[+providers]]
	</span>

</div>',
    ),
  ),
  'c6f260d8bdf03e52080dc69b01202975' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.profile',
    ),
    'object' => 
    array (
      'id' => 172,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.profile',
      'description' => 'Chunk for profile update',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'snippet' => '<form action="[[~[[*id]]]]" method="post" class="form-horizontal">

	<div class="control-group">
		<label class="control-label">[[%ha.gravatar]]</label>
		<div class="controls">
			<img src="[[+gravatar]]?s=100" alt="[[+email]]" title="[[+email]]"  style="margin-left:40px;" />
			<br/><small>[[%ha.gravatar_desc]]</small>
		</div>
	</div>

	<div class="control-group[[+error.username:notempty=` error`]]">
		<label class="control-label">[[%ha.username]]</label>
		<div class="controls">
			<input type="text" name="username" value="[[+username]]" />
			<span class="help-inline">[[+error.username]]</span>
		</div>
	</div>
	
	<div class="control-group[[+error.fullname:notempty=` error`]]">
		<label class="control-label">[[%ha.fullname]]</label>
		<div class="controls">
			<input type="text" name="fullname" value="[[+fullname]]" />
			<span class="help-inline">[[+error.fullname]]</span>
		</div>
	</div>
	
	<div class="control-group[[+error.email:notempty=` error`]]">
		<label class="control-label">[[%ha.email]]</label>
		<div class="controls">
			<input type="text" name="email" value="[[+email]]" />
			<span class="help-inline">[[+error.email]]</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">[[%ha.providers_available]]</label>
		<div class="controls">
			[[+providers]]
		</div>
	</div>

	<input type="hidden" name="hauth_action" value="updateProfile" />
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">[[%ha.save_profile]]</button>
		&nbsp;&nbsp;
		<a href="[[+logout_url]]" class="btn btn-danger">[[%ha.logout]]</a>
	</div>
</form>
[[+success:is=`1`:then=`<div class="alert alert-block">[[%ha.profile_update_success]]</div>`]]
[[+success:is=`0`:then=`<div class="alert alert-block alert-error">[[%ha.profile_update_error]] [[+error.message]]</div>`]]',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.profile.tpl',
      'content' => '<form action="[[~[[*id]]]]" method="post" class="form-horizontal">

	<div class="control-group">
		<label class="control-label">[[%ha.gravatar]]</label>
		<div class="controls">
			<img src="[[+gravatar]]?s=100" alt="[[+email]]" title="[[+email]]"  style="margin-left:40px;" />
			<br/><small>[[%ha.gravatar_desc]]</small>
		</div>
	</div>

	<div class="control-group[[+error.username:notempty=` error`]]">
		<label class="control-label">[[%ha.username]]</label>
		<div class="controls">
			<input type="text" name="username" value="[[+username]]" />
			<span class="help-inline">[[+error.username]]</span>
		</div>
	</div>
	
	<div class="control-group[[+error.fullname:notempty=` error`]]">
		<label class="control-label">[[%ha.fullname]]</label>
		<div class="controls">
			<input type="text" name="fullname" value="[[+fullname]]" />
			<span class="help-inline">[[+error.fullname]]</span>
		</div>
	</div>
	
	<div class="control-group[[+error.email:notempty=` error`]]">
		<label class="control-label">[[%ha.email]]</label>
		<div class="controls">
			<input type="text" name="email" value="[[+email]]" />
			<span class="help-inline">[[+error.email]]</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">[[%ha.providers_available]]</label>
		<div class="controls">
			[[+providers]]
		</div>
	</div>

	<input type="hidden" name="hauth_action" value="updateProfile" />
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">[[%ha.save_profile]]</button>
		&nbsp;&nbsp;
		<a href="[[+logout_url]]" class="btn btn-danger">[[%ha.logout]]</a>
	</div>
</form>
[[+success:is=`1`:then=`<div class="alert alert-block">[[%ha.profile_update_success]]</div>`]]
[[+success:is=`0`:then=`<div class="alert alert-block alert-error">[[%ha.profile_update_error]] [[+error.message]]</div>`]]',
    ),
  ),
  '2b82f52f8e081292ef955c23f2776a52' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.provider',
    ),
    'object' => 
    array (
      'id' => 173,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.provider',
      'description' => 'Chunk for authorization provider',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'snippet' => '<a href="[[+login_url]]&amp;provider=[[+title]]" class="ha-icon [[+provider]]" rel="nofollow" title="[[+title]]">[[+title]]</a>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.provider.tpl',
      'content' => '<a href="[[+login_url]]&amp;provider=[[+title]]" class="ha-icon [[+provider]]" rel="nofollow" title="[[+title]]">[[+title]]</a>
',
    ),
  ),
  '85d75152c8d5fbb1de3c4c1eddf8a0f7' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.provider.active',
    ),
    'object' => 
    array (
      'id' => 174,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.provider.active',
      'description' => 'Chunk for active authorization provider',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'snippet' => '<span class="ha-icon active [[+provider]]" title="[[+title]]">[[+title]]</span>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.provider_active.tpl',
      'content' => '<span class="ha-icon active [[+provider]]" title="[[+title]]">[[+title]]</span>',
    ),
  ),
  '95d2b2acaf085fcd967a91e30c4246b8' => 
  array (
    'criteria' => 
    array (
      'name' => 'HybridAuth',
    ),
    'object' => 
    array (
      'id' => 66,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'HybridAuth',
      'description' => 'Social authorization',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */

$modx->error->message = null;
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
	return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
	return $modx->error->message;
}
// For compatibility with old snippet
elseif (!empty($action)) {
	$tmp = strtolower($action);
	if ($tmp == \'getprofile\' || $tmp == \'updateprofile\') {
		return $modx->runSnippet(\'haProfile\', $scriptProperties);
	}
}

if (empty($loginTpl)) {
	$loginTpl = \'tpl.HybridAuth.login\';
}
if (empty($logoutTpl)) {
	$logoutTpl = \'tpl.HybridAuth.logout\';
}
if (empty($providerTpl)) {
	$providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
	$activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}

$url = $HybridAuth->getUrl();
$error = \'\';
if (!empty($_SESSION[\'HA\'][\'error\'])) {
	$error = $_SESSION[\'HA\'][\'error\'];
	unset($_SESSION[\'HA\'][\'error\']);
}

if ($modx->user->isAuthenticated($modx->context->key)) {
	$add = array();
	if ($services = $modx->user->getMany(\'Services\')) {
		/* @var haUserService $service */
		foreach ($services as $service) {
			$add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
		}
	}

	$user = $modx->user->toArray();
	$profile = $modx->user->Profile->toArray();
	unset($profile[\'id\']);
	$arr = array_merge(
		$user,
		$profile,
		$add,
		array(
			\'login_url\' => $url . \'login\',
			\'logout_url\' => $url . \'logout\',
			\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
			\'error\' => $error,
			\'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
		)
	);

	return $modx->getChunk($logoutTpl, $arr);
}
else {
	$arr = array(
		\'login_url\' => $url . \'login\',
		\'logout_url\' => $url . \'logout\',
		\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
		\'error\' => $error,
	);

	return $modx->getChunk($loginTpl, $arr);
}',
      'locked' => 0,
      'properties' => 'a:12:{s:9:"providers";a:7:{s:4:"name";s:9:"providers";s:4:"desc";s:12:"ha.providers";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:10:"rememberme";a:7:{s:4:"name";s:10:"rememberme";s:4:"desc";s:13:"ha.rememberme";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:8:"loginTpl";a:7:{s:4:"name";s:8:"loginTpl";s:4:"desc";s:11:"ha.loginTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"tpl.HybridAuth.login";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:9:"logoutTpl";a:7:{s:4:"name";s:9:"logoutTpl";s:4:"desc";s:12:"ha.logoutTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.HybridAuth.logout";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"providerTpl";a:7:{s:4:"name";s:11:"providerTpl";s:4:"desc";s:14:"ha.providerTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.HybridAuth.provider";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:17:"activeProviderTpl";a:7:{s:4:"name";s:17:"activeProviderTpl";s:4:"desc";s:20:"ha.activeProviderTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"tpl.HybridAuth.provider.active";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:6:"groups";a:7:{s:4:"name";s:6:"groups";s:4:"desc";s:9:"ha.groups";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:12:"loginContext";a:7:{s:4:"name";s:12:"loginContext";s:4:"desc";s:15:"ha.loginContext";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"addContexts";a:7:{s:4:"name";s:11:"addContexts";s:4:"desc";s:14:"ha.addContexts";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:15:"loginResourceId";a:7:{s:4:"name";s:15:"loginResourceId";s:4:"desc";s:18:"ha.loginResourceId";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:16:"logoutResourceId";a:7:{s:4:"name";s:16:"logoutResourceId";s:4:"desc";s:19:"ha.logoutResourceId";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"redirectUri";a:7:{s:4:"name";s:11:"redirectUri";s:4:"desc";s:14:"ha.redirectUri";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/snippets/snippet.hybridauth.php',
      'content' => '/** @var array $scriptProperties */

$modx->error->message = null;
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
	return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
	return $modx->error->message;
}
// For compatibility with old snippet
elseif (!empty($action)) {
	$tmp = strtolower($action);
	if ($tmp == \'getprofile\' || $tmp == \'updateprofile\') {
		return $modx->runSnippet(\'haProfile\', $scriptProperties);
	}
}

if (empty($loginTpl)) {
	$loginTpl = \'tpl.HybridAuth.login\';
}
if (empty($logoutTpl)) {
	$logoutTpl = \'tpl.HybridAuth.logout\';
}
if (empty($providerTpl)) {
	$providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
	$activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}

$url = $HybridAuth->getUrl();
$error = \'\';
if (!empty($_SESSION[\'HA\'][\'error\'])) {
	$error = $_SESSION[\'HA\'][\'error\'];
	unset($_SESSION[\'HA\'][\'error\']);
}

if ($modx->user->isAuthenticated($modx->context->key)) {
	$add = array();
	if ($services = $modx->user->getMany(\'Services\')) {
		/* @var haUserService $service */
		foreach ($services as $service) {
			$add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
		}
	}

	$user = $modx->user->toArray();
	$profile = $modx->user->Profile->toArray();
	unset($profile[\'id\']);
	$arr = array_merge(
		$user,
		$profile,
		$add,
		array(
			\'login_url\' => $url . \'login\',
			\'logout_url\' => $url . \'logout\',
			\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
			\'error\' => $error,
			\'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
		)
	);

	return $modx->getChunk($logoutTpl, $arr);
}
else {
	$arr = array(
		\'login_url\' => $url . \'login\',
		\'logout_url\' => $url . \'logout\',
		\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
		\'error\' => $error,
	);

	return $modx->getChunk($loginTpl, $arr);
}',
    ),
  ),
  '8a8cede729f52ae998c6db0809d231c4' => 
  array (
    'criteria' => 
    array (
      'name' => 'haProfile',
    ),
    'object' => 
    array (
      'id' => 67,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'haProfile',
      'description' => 'Update your profile',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */

$modx->error->message = null;
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
	return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
	return $modx->error->message;
}
elseif (!$modx->user->isAuthenticated($modx->context->key)) {
	return $modx->lexicon(\'ha_err_not_logged_in\');
}

if (empty($profileTpl)) {
	$profileTpl = \'tpl.HybridAuth.profile\';
}
if (empty($profileFields)) {
	$profileFields = \'username:25,email:50,fullname:50,phone:12,mobilephone:12,dob:10,gender,address,country,city,state,zip,fax,photo,comment,website\';
}
if (empty($requiredFields)) {
	$requiredFields = \'username,email,fullname\';
}
if (empty($providerTpl)) {
	$providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
	$activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}
$data = array();

// Update of profile
if ((!empty($_REQUEST[\'action\']) && strtolower($_REQUEST[\'action\']) == \'updateprofile\') || (!empty($_REQUEST[\'hauth_action\']) && strtolower($_REQUEST[\'hauth_action\']) == \'updateprofile\')) {
	$profileFields = array_map(\'trim\', explode(\',\', $profileFields));
	foreach ($profileFields as $field) {
		if (strpos($field, \':\') !== false) {
			list($key, $length) = explode(\':\', $field);
		}
		else {
			$key = $field;
			$length = 0;
		}

		if (isset($_REQUEST[$key])) {
			if ($key == \'comment\') {
				$data[$key] = empty($length) ? $_REQUEST[$key] : substr($_REQUEST[$key], $length);
			}
			else {
				$data[$key] = $HybridAuth->Sanitize($_REQUEST[$key], $length);
			}
		}
	}

	$data[\'requiredFields\'] = array_map(\'trim\', explode(\',\', $requiredFields));

	/** @var modProcessorResponse $response */
	$response = $HybridAuth->runProcessor(\'web/user/update\', $data);
	if ($response->isError()) {
		$data[\'error.message\'] = $response->getMessage();
		foreach ($response->errors as $error) {
			$data[\'error.\' . $error->field] = $error->message;
		}
	}
	$data[\'success\'] = (integer)!$response->isError();
}

$add = array();
if ($services = $modx->user->getMany(\'Services\')) {
	/* @var haUserService $service */
	foreach ($services as $service) {
		$add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
	}
}

$url = $HybridAuth->getUrl();
$user = $modx->user->toArray();
$profile = $modx->user->Profile->toArray();
$data = array_merge(
	$user,
	$profile,
	$add,
	$data,
	array(
		\'login_url\' => $url . \'login\',
		\'logout_url\' => $url . \'logout\',
		\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
		\'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
	)
);

return $modx->getChunk($profileTpl, $data);',
      'locked' => 0,
      'properties' => 'a:5:{s:10:"profileTpl";a:7:{s:4:"name";s:10:"profileTpl";s:4:"desc";s:13:"ha.profileTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.HybridAuth.profile";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:13:"profileFields";a:7:{s:4:"name";s:13:"profileFields";s:4:"desc";s:16:"ha.profileFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:127:"username:25,email:50,fullname:50,phone:12,mobilephone:12,dob:10,gender,address,country,city,state,zip,fax,photo,comment,website";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:17:"ha.requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"username,email,fullname";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"providerTpl";a:7:{s:4:"name";s:11:"providerTpl";s:4:"desc";s:14:"ha.providerTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.HybridAuth.provider";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:17:"activeProviderTpl";a:7:{s:4:"name";s:17:"activeProviderTpl";s:4:"desc";s:20:"ha.activeProviderTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"tpl.HybridAuth.provider.active";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/snippets/snippet.haprofile.php',
      'content' => '/** @var array $scriptProperties */

$modx->error->message = null;
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
	return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
	return $modx->error->message;
}
elseif (!$modx->user->isAuthenticated($modx->context->key)) {
	return $modx->lexicon(\'ha_err_not_logged_in\');
}

if (empty($profileTpl)) {
	$profileTpl = \'tpl.HybridAuth.profile\';
}
if (empty($profileFields)) {
	$profileFields = \'username:25,email:50,fullname:50,phone:12,mobilephone:12,dob:10,gender,address,country,city,state,zip,fax,photo,comment,website\';
}
if (empty($requiredFields)) {
	$requiredFields = \'username,email,fullname\';
}
if (empty($providerTpl)) {
	$providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
	$activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}
$data = array();

// Update of profile
if ((!empty($_REQUEST[\'action\']) && strtolower($_REQUEST[\'action\']) == \'updateprofile\') || (!empty($_REQUEST[\'hauth_action\']) && strtolower($_REQUEST[\'hauth_action\']) == \'updateprofile\')) {
	$profileFields = array_map(\'trim\', explode(\',\', $profileFields));
	foreach ($profileFields as $field) {
		if (strpos($field, \':\') !== false) {
			list($key, $length) = explode(\':\', $field);
		}
		else {
			$key = $field;
			$length = 0;
		}

		if (isset($_REQUEST[$key])) {
			if ($key == \'comment\') {
				$data[$key] = empty($length) ? $_REQUEST[$key] : substr($_REQUEST[$key], $length);
			}
			else {
				$data[$key] = $HybridAuth->Sanitize($_REQUEST[$key], $length);
			}
		}
	}

	$data[\'requiredFields\'] = array_map(\'trim\', explode(\',\', $requiredFields));

	/** @var modProcessorResponse $response */
	$response = $HybridAuth->runProcessor(\'web/user/update\', $data);
	if ($response->isError()) {
		$data[\'error.message\'] = $response->getMessage();
		foreach ($response->errors as $error) {
			$data[\'error.\' . $error->field] = $error->message;
		}
	}
	$data[\'success\'] = (integer)!$response->isError();
}

$add = array();
if ($services = $modx->user->getMany(\'Services\')) {
	/* @var haUserService $service */
	foreach ($services as $service) {
		$add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
	}
}

$url = $HybridAuth->getUrl();
$user = $modx->user->toArray();
$profile = $modx->user->Profile->toArray();
$data = array_merge(
	$user,
	$profile,
	$add,
	$data,
	array(
		\'login_url\' => $url . \'login\',
		\'logout_url\' => $url . \'logout\',
		\'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
		\'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
	)
);

return $modx->getChunk($profileTpl, $data);',
    ),
  ),
  'dc6d942d50b1ddea95b2d1248b460022' => 
  array (
    'criteria' => 
    array (
      'name' => 'HybridAuth',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'HybridAuth',
      'description' => '',
      'editor_type' => 0,
      'category' => 30,
      'cache_type' => 0,
      'plugincode' => 'if (!$modx->loadClass(\'hybridauth\', $modx->getOption(\'hybridauth.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/hybridauth/\') . \'model/hybridauth/\', false, true)) {
	return;
}

switch ($modx->event->name) {

	case \'OnHandleRequest\':
		if ($modx->context->key != \'web\' && !$modx->user->id) {
			if ($user = $modx->getAuthenticatedUser($modx->context->key)) {
				$modx->user = $user;
				$modx->getUser($modx->context->key);
			}
		}

		if ($modx->user->isAuthenticated($modx->context->key)) {
			if (!$modx->user->active || $modx->user->Profile->blocked) {
				$modx->runProcessor(\'security/logout\');
				$modx->sendRedirect($modx->makeUrl($modx->getOption(\'site_start\'), \'\', \'\', \'full\'));
			}
		}

		if (!empty($_REQUEST[\'hauth_action\']) || !empty($_REQUEST[\'hauth_start\']) || !empty($_REQUEST[\'hauth_done\'])) {
			$config = !empty($_SESSION[\'HybridAuth\'][$modx->context->key])
				? $_SESSION[\'HybridAuth\'][$modx->context->key]
				: array();
			$HybridAuth = new HybridAuth($modx, $config);

			if (!empty($_REQUEST[\'hauth_action\'])) {
				switch ($_REQUEST[\'hauth_action\']) {
					case \'login\':
						$HybridAuth->Login(@$_REQUEST[\'provider\']);
						break;
					case \'logout\':
						$HybridAuth->Logout();
						break;
				}
			}
			else {
				$HybridAuth->processAuth();
			}
		}
		break;

	case \'OnWebAuthentication\':
		$modx->event->_output = !empty($_SESSION[\'HybridAuth\'][\'verified\']);
		unset($_SESSION[\'HybridAuth\'][\'verified\']);
		break;

	case \'OnUserFormPrerender\':
		/** @var modUser $user */
		if (!isset($user) || $user->get(\'id\') < 1) {
			return;
		}
		$HybridAuth = new HybridAuth($modx);
		$modx->controller->addJavascript($HybridAuth->config[\'jsUrl\'] . \'mgr/hybridauth.js\');
		$modx->controller->addJavascript($HybridAuth->config[\'jsUrl\'] . \'mgr/service/grids.js\');
		$modx->controller->addLexiconTopic(\'hybridauth:default\');

		if ($modx->getCount(\'modPlugin\', array(\'name\' => \'AjaxManager\', \'disabled\' => false))) {
			$modx->controller->addHtml(\'
			<script type="text/javascript">
				HybridAuth.config = \' . $modx->toJSON($HybridAuth->config) . \';
				Ext.onReady(function() {
					window.setTimeout(function() {
						var tab = Ext.getCmp("modx-user-tabs");
						if (!tab) {return;}
						tab.add({
							title: _("ha.services"),
							border: false,
							items: [{
								layout: "anchor",
								border: false,
								items: [{
									html: _("ha.services_tip"),
									border: false,
									bodyCssClass: "panel-desc"
								}, {
									xtype: "hybridauth-grid-services",
									anchor: "100%",
									cls: "main-wrapper",
									userId: \' . intval($user->get(\'id\')) . \'
								}]
							}]
						});
					}, 10);
				});
			</script>\'
			);
		}
		else {
			$modx->controller->addHtml(\'
			<script type="text/javascript">
				HybridAuth.config = \' . $modx->toJSON($HybridAuth->config) . \';
				Ext.ComponentMgr.onAvailable("modx-user-tabs", function() {
					this.on("beforerender", function() {
						this.add({
							title: _("ha.services"),
							border: false,
							items: [{
								layout: "anchor",
								border: false,
								items: [{
									html: _("ha.services_tip"),
									border: false,
									bodyCssClass: "panel-desc"
								}, {
									xtype: "hybridauth-grid-services",
									anchor: "100%",
									cls: "main-wrapper",
									userId: \' . intval($user->get(\'id\')) . \'
								}]
							}]
						});
					});
				});
			</script>\'
			);
		}
		break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/plugins/plugin.hybridauth.php',
      'content' => 'if (!$modx->loadClass(\'hybridauth\', $modx->getOption(\'hybridauth.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/hybridauth/\') . \'model/hybridauth/\', false, true)) {
	return;
}

switch ($modx->event->name) {

	case \'OnHandleRequest\':
		if ($modx->context->key != \'web\' && !$modx->user->id) {
			if ($user = $modx->getAuthenticatedUser($modx->context->key)) {
				$modx->user = $user;
				$modx->getUser($modx->context->key);
			}
		}

		if ($modx->user->isAuthenticated($modx->context->key)) {
			if (!$modx->user->active || $modx->user->Profile->blocked) {
				$modx->runProcessor(\'security/logout\');
				$modx->sendRedirect($modx->makeUrl($modx->getOption(\'site_start\'), \'\', \'\', \'full\'));
			}
		}

		if (!empty($_REQUEST[\'hauth_action\']) || !empty($_REQUEST[\'hauth_start\']) || !empty($_REQUEST[\'hauth_done\'])) {
			$config = !empty($_SESSION[\'HybridAuth\'][$modx->context->key])
				? $_SESSION[\'HybridAuth\'][$modx->context->key]
				: array();
			$HybridAuth = new HybridAuth($modx, $config);

			if (!empty($_REQUEST[\'hauth_action\'])) {
				switch ($_REQUEST[\'hauth_action\']) {
					case \'login\':
						$HybridAuth->Login(@$_REQUEST[\'provider\']);
						break;
					case \'logout\':
						$HybridAuth->Logout();
						break;
				}
			}
			else {
				$HybridAuth->processAuth();
			}
		}
		break;

	case \'OnWebAuthentication\':
		$modx->event->_output = !empty($_SESSION[\'HybridAuth\'][\'verified\']);
		unset($_SESSION[\'HybridAuth\'][\'verified\']);
		break;

	case \'OnUserFormPrerender\':
		/** @var modUser $user */
		if (!isset($user) || $user->get(\'id\') < 1) {
			return;
		}
		$HybridAuth = new HybridAuth($modx);
		$modx->controller->addJavascript($HybridAuth->config[\'jsUrl\'] . \'mgr/hybridauth.js\');
		$modx->controller->addJavascript($HybridAuth->config[\'jsUrl\'] . \'mgr/service/grids.js\');
		$modx->controller->addLexiconTopic(\'hybridauth:default\');

		if ($modx->getCount(\'modPlugin\', array(\'name\' => \'AjaxManager\', \'disabled\' => false))) {
			$modx->controller->addHtml(\'
			<script type="text/javascript">
				HybridAuth.config = \' . $modx->toJSON($HybridAuth->config) . \';
				Ext.onReady(function() {
					window.setTimeout(function() {
						var tab = Ext.getCmp("modx-user-tabs");
						if (!tab) {return;}
						tab.add({
							title: _("ha.services"),
							border: false,
							items: [{
								layout: "anchor",
								border: false,
								items: [{
									html: _("ha.services_tip"),
									border: false,
									bodyCssClass: "panel-desc"
								}, {
									xtype: "hybridauth-grid-services",
									anchor: "100%",
									cls: "main-wrapper",
									userId: \' . intval($user->get(\'id\')) . \'
								}]
							}]
						});
					}, 10);
				});
			</script>\'
			);
		}
		else {
			$modx->controller->addHtml(\'
			<script type="text/javascript">
				HybridAuth.config = \' . $modx->toJSON($HybridAuth->config) . \';
				Ext.ComponentMgr.onAvailable("modx-user-tabs", function() {
					this.on("beforerender", function() {
						this.add({
							title: _("ha.services"),
							border: false,
							items: [{
								layout: "anchor",
								border: false,
								items: [{
									html: _("ha.services_tip"),
									border: false,
									bodyCssClass: "panel-desc"
								}, {
									xtype: "hybridauth-grid-services",
									anchor: "100%",
									cls: "main-wrapper",
									userId: \' . intval($user->get(\'id\')) . \'
								}]
							}]
						});
					});
				});
			</script>\'
			);
		}
		break;
}',
    ),
  ),
  '61c05f02967aab84625f314a6204a106' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnHandleRequest',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnHandleRequest',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  'd7c0e1eca50d37b53de2ce4c81892ec8' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnUserFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnUserFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '319da9a8aed036333fe29e168ecb9ea5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 15,
      'event' => 'OnWebAuthentication',
    ),
    'object' => 
    array (
      'pluginid' => 15,
      'event' => 'OnWebAuthentication',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);