<?php return array (
  '2b2bf1009613c797ef8acad7e2283f02' => 
  array (
    'criteria' => 
    array (
      'name' => 'easycomm',
    ),
    'object' => 
    array (
      'name' => 'easycomm',
      'path' => '{core_path}components/easycomm/',
      'assets_path' => '{base_path}_easyComm/assets/components/easycomm/',
    ),
  ),
  'afa2315e6f88720d1fbfa36d93b6faa8' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_show_templates',
    ),
    'object' => 
    array (
      'key' => 'ec_show_templates',
      'value' => '*',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0f7fc52952b64abd6352b2588566c991' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_show_resources',
    ),
    'object' => 
    array (
      'key' => 'ec_show_resources',
      'value' => '*',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '06eed2ec662935078315839b74ff6faf' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_frontend_css',
    ),
    'object' => 
    array (
      'key' => 'ec_frontend_css',
      'value' => '[[+cssUrl]]web/ec.default.css',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3782294f89de3bb4a62f230d32ab9379' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_frontend_js',
    ),
    'object' => 
    array (
      'key' => 'ec_frontend_js',
      'value' => '[[+jsUrl]]web/ec.default.js',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3fbb897ad4f2a7dff83cb19e28edb1a8' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_thread_grid_fields',
    ),
    'object' => 
    array (
      'key' => 'ec_thread_grid_fields',
      'value' => 'id,resource,name,title,count,rating_simple,rating_wilson',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a7cccf3b26091824e85e145ac2d13b78' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_thread_window_fields',
    ),
    'object' => 
    array (
      'key' => 'ec_thread_window_fields',
      'value' => 'resource,name,title,rating_simple,rating_wilson',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b1bcc3323556e0b7e867e2b537d466db' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_message_grid_fields',
    ),
    'object' => 
    array (
      'key' => 'ec_message_grid_fields',
      'value' => 'id,thread_name,date,user_name,user_email,rating,text,reply_author,reply_text,ip',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '2016-02-02 13:27:21',
    ),
  ),
  'f4f6892965e1422dfbc1f7fde362d093' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_message_window_layout',
    ),
    'object' => 
    array (
      'key' => 'ec_message_window_layout',
      'value' => '{"main": {"name": "main","columns": {"column0":["user_name","user_email"],"column1":["date","user_contacts"]},"fields": ["subject","rating","text","published"]},"reply":{"name": "reply", "columns": {}, "fields": ["reply_author","reply_text","notify","notify_date"]},"settings":{"name": "settings", "columns": {}, "fields": [ "thread","ip","extended"]}}',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b1269ea5c3c9731bad4cfbe98f9c79d7' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_auto_reply_author',
    ),
    'object' => 
    array (
      'key' => 'ec_auto_reply_author',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9386011a27d329fd1bd6be5cb52c24e7' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_notify_user',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_notify_user',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '066b6b4b7522c429c8b12382d987f49a' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_notify_manager',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_notify_manager',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4fea7ce7c8a3baf012287986499ec7ea' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_new_subject_manager',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_new_subject_manager',
      'value' => 'Новое сообщение на сайте [[++site_url]]',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c9dc8a2d1120eb7cfc7e7bed1fd4a874' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_new_subject_user',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_new_subject_user',
      'value' => 'Вы оставили сообщение на сайте [[++site_url]]',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '64c56c032ab73ced7487c5b423226b5e' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_update_subject_user',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_update_subject_user',
      'value' => 'Уведомление о вашем сообщении на сайте [[++site_url]]',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '53ab380de146baccc662c3a9ce835251' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_manager',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_manager',
      'value' => 'info@bodybuilding.ua, live_in_studio54@list.ru',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '2016-02-02 18:59:22',
    ),
  ),
  '99f5891edd8231fd1a7bc0d39fbfb157' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_from',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_from',
      'value' => 'noreply@bodybuilding.ua',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '2016-01-16 18:12:38',
    ),
  ),
  '1a4bfd91afe8bc0060876713af5532e5' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_mail_from_name',
    ),
    'object' => 
    array (
      'key' => 'ec_mail_from_name',
      'value' => 'BodyBuilding',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_mail',
      'editedon' => '2016-01-16 18:12:52',
    ),
  ),
  '820909b53662c22f4d2b3e546f60d784' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_rating_max',
    ),
    'object' => 
    array (
      'key' => 'ec_rating_max',
      'value' => '5',
      'xtype' => 'numberfield',
      'namespace' => 'easycomm',
      'area' => 'ec_rating',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5f8a32096e291dae2fb1e7cecb9e69fa' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_rating_wilson_confidence',
    ),
    'object' => 
    array (
      'key' => 'ec_rating_wilson_confidence',
      'value' => '1.6',
      'xtype' => 'numberfield',
      'namespace' => 'easycomm',
      'area' => 'ec_rating',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '41b09c5578dd8a18103e5f23c5ec1a9e' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_gravatar_size',
    ),
    'object' => 
    array (
      'key' => 'ec_gravatar_size',
      'value' => '50',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_gravatar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9aacd548b70227ca77ecca2e803299a3' => 
  array (
    'criteria' => 
    array (
      'key' => 'ec_gravatar_default',
    ),
    'object' => 
    array (
      'key' => 'ec_gravatar_default',
      'value' => '[[++site_url]]assets/components/easycomm/img/web/avatar-simple.png',
      'xtype' => 'textfield',
      'namespace' => 'easycomm',
      'area' => 'ec_gravatar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f83d1b4bba1565fa184b9bf17a1378e4' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageSave',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageSave',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '8898006d81beb2d363c2e2172cfd537f' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageSave',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageSave',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '967449f4b3984f2d42b3475fd54025d7' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessagePublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessagePublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '84c218bab3fc8bf81c03bc0eed4fc7df' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessagePublish',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessagePublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '0f286c4abf572c76ac3749bd71e97d1e' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageUnpublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '8bda795f12801c55a06b8d52792ad1c4' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageUnpublish',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'ee697713c38c856b2e30970cf785e300' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageDelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '4f319f00676138df2247e092bf66133e' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageDelete',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageDelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'ef2e674c591e16d16354a7f203a8232b' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageUndelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  'cd2e4a371b87050e6c87a0470563e62d' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageUndelete',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '74316bb32654c58192086d44ec6ed4e6' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeEcMessageRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeEcMessageRemove',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '65f96479842f134523d0370f4298e6b7' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnEcMessageRemove',
    ),
    'object' => 
    array (
      'name' => 'OnEcMessageRemove',
      'service' => 6,
      'groupname' => 'easyComm',
    ),
  ),
  '9c0801d2735fe6ad79eaa6e095ff070c' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'easycomm',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 12,
      'namespace' => 'easycomm',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'easycomm:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  'e6473103af23b56bf5e9ffb7fa22e031' => 
  array (
    'criteria' => 
    array (
      'text' => 'easyComm',
    ),
    'object' => 
    array (
      'text' => 'easyComm',
      'parent' => 'components',
      'action' => '12',
      'description' => 'ec_menu_desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  'c35a79c85d5667fd4a613a499c7f6303' => 
  array (
    'criteria' => 
    array (
      'category' => 'easyComm',
    ),
    'object' => 
    array (
      'id' => 51,
      'parent' => 0,
      'category' => 'easyComm',
    ),
  ),
  '0f6c6dc6cab4b3505196a7cfe6e6e40a' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecMessages.Row',
    ),
    'object' => 
    array (
      'id' => 262,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecMessages.Row',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '<div id="ec-[[+thread_name]]-message-[[+id]]" class="ec-message">
    <p><strong>[[+user_name]]</strong><span class="ec-message__date"> [[+date:dateAgo]]</span></p>
    <div class="ec-stars">
        <span class="rating-[[+rating]]"></span>
    </div>
    <p>[[+text]]</p>
    [[+reply_text]]
</div>

<!--ec_reply_text <div class="ec-message__reply">[[+reply_author]]<p>[[+reply_text]]</p></div>-->
<!--ec_reply_author <p><strong>[[+reply_author]]</strong></p>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_messages_row.tpl',
      'content' => '<div id="ec-[[+thread_name]]-message-[[+id]]" class="ec-message">
    <p><strong>[[+user_name]]</strong><span class="ec-message__date"> [[+date:dateAgo]]</span></p>
    <div class="ec-stars">
        <span class="rating-[[+rating]]"></span>
    </div>
    <p>[[+text]]</p>
    [[+reply_text]]
</div>

<!--ec_reply_text <div class="ec-message__reply">[[+reply_author]]<p>[[+reply_text]]</p></div>-->
<!--ec_reply_author <p><strong>[[+reply_author]]</strong></p>-->',
    ),
  ),
  '0b3a7a7e3569ae60f6f6a55ab21ae0df' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm',
    ),
    'object' => 
    array (
      'id' => 263,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '<h2>[[%ec_fe_message_add]]</h2>
<form class="form well ec-form" method="post" role="form" id="ec-form-[[+fid]]" data-fid="[[+fid]]" action="">
    <input type="hidden" name="thread" value="[[+thread]]">

    <div class="form-group ec-antispam">
        <label for="ec-[[+antispam_field]]-[[+fid]]" class="control-label">[[%ec_fe_message_antismap]]</label>
        <input type="text" name="[[+antispam_field]]" class="form-control" id="ec-[[+antispam_field]]-[[+fid]]" value="" />
    </div>

    <div class="form-group">
        <label for="ec-user_name-[[+fid]]" class="control-label">[[%ec_fe_message_user_name]]</label>
        <input type="text" name="user_name" class="form-control" id="ec-user_name-[[+fid]]" value="[[+user_name]]" />
        <span class="ec-error help-block" id="ec-user_name-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_email-[[+fid]]" class="control-label">[[%ec_fe_message_user_email]]</label>
        <input type="text" name="user_email" class="form-control" id="ec-user_email-[[+fid]]" value="[[+user_email]]" />
        <span class="ec-error help-block" id="ec-user_email-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_contacts-[[+fid]]" class="control-label">[[%ec_fe_message_user_contacts]]</label>
        <input type="text" name="user_contacts" class="form-control" id="ec-user_contacts-[[+fid]]" value="[[+user_contacts]]" />
        <span class="ec-error help-block" id="ec-user_contacts-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-subject-[[+fid]]" class="control-label">[[%ec_fe_message_subject]]</label>
        <input type="text" name="subject" class="form-control" id="ec-subject-[[+fid]]" value="[[+subject]]" />
        <span class="ec-error help-block" id="ec-subject-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-rating-[[+fid]]" class="control-label">[[%ec_fe_message_rating]]</label>
        <input type="hidden" name="rating" id="ec-rating-[[+fid]]" value="[[+rating]]" />
        <div class="ec-rating ec-clearfix" data-storage-id="ec-rating-[[+fid]]">
            <div class="ec-rating-stars">
                <span data-rating="1" data-description="[[%ec_fe_message_rating_1]]"></span>
                <span data-rating="2" data-description="[[%ec_fe_message_rating_2]]"></span>
                <span data-rating="3" data-description="[[%ec_fe_message_rating_3]]"></span>
                <span data-rating="4" data-description="[[%ec_fe_message_rating_4]]"></span>
                <span data-rating="5" data-description="[[%ec_fe_message_rating_5]]"></span>
            </div>
            <div class="ec-rating-description">[[%ec_fe_message_rating_0]]</div>
        </div>
        <span class="ec-error help-block" id="ec-rating-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-text-[[+fid]]" class="control-label">[[%ec_fe_message_text]]</label>
        <textarea type="text" name="text" class="form-control" rows="5" id="ec-text-[[+fid]]">[[+text]]</textarea>
        <span class="ec-error help-block" id="ec-text-error-[[+fid]]"></span>
    </div>

    <div class="form-actions">
        <input type="submit" class="btn btn-primary" name="send" value="[[%ec_fe_send]]" />
    </div>
</form>
<div id="ec-form-success-[[+fid]]"></div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form.tpl',
      'content' => '<h2>[[%ec_fe_message_add]]</h2>
<form class="form well ec-form" method="post" role="form" id="ec-form-[[+fid]]" data-fid="[[+fid]]" action="">
    <input type="hidden" name="thread" value="[[+thread]]">

    <div class="form-group ec-antispam">
        <label for="ec-[[+antispam_field]]-[[+fid]]" class="control-label">[[%ec_fe_message_antismap]]</label>
        <input type="text" name="[[+antispam_field]]" class="form-control" id="ec-[[+antispam_field]]-[[+fid]]" value="" />
    </div>

    <div class="form-group">
        <label for="ec-user_name-[[+fid]]" class="control-label">[[%ec_fe_message_user_name]]</label>
        <input type="text" name="user_name" class="form-control" id="ec-user_name-[[+fid]]" value="[[+user_name]]" />
        <span class="ec-error help-block" id="ec-user_name-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_email-[[+fid]]" class="control-label">[[%ec_fe_message_user_email]]</label>
        <input type="text" name="user_email" class="form-control" id="ec-user_email-[[+fid]]" value="[[+user_email]]" />
        <span class="ec-error help-block" id="ec-user_email-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_contacts-[[+fid]]" class="control-label">[[%ec_fe_message_user_contacts]]</label>
        <input type="text" name="user_contacts" class="form-control" id="ec-user_contacts-[[+fid]]" value="[[+user_contacts]]" />
        <span class="ec-error help-block" id="ec-user_contacts-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-subject-[[+fid]]" class="control-label">[[%ec_fe_message_subject]]</label>
        <input type="text" name="subject" class="form-control" id="ec-subject-[[+fid]]" value="[[+subject]]" />
        <span class="ec-error help-block" id="ec-subject-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-rating-[[+fid]]" class="control-label">[[%ec_fe_message_rating]]</label>
        <input type="hidden" name="rating" id="ec-rating-[[+fid]]" value="[[+rating]]" />
        <div class="ec-rating ec-clearfix" data-storage-id="ec-rating-[[+fid]]">
            <div class="ec-rating-stars">
                <span data-rating="1" data-description="[[%ec_fe_message_rating_1]]"></span>
                <span data-rating="2" data-description="[[%ec_fe_message_rating_2]]"></span>
                <span data-rating="3" data-description="[[%ec_fe_message_rating_3]]"></span>
                <span data-rating="4" data-description="[[%ec_fe_message_rating_4]]"></span>
                <span data-rating="5" data-description="[[%ec_fe_message_rating_5]]"></span>
            </div>
            <div class="ec-rating-description">[[%ec_fe_message_rating_0]]</div>
        </div>
        <span class="ec-error help-block" id="ec-rating-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-text-[[+fid]]" class="control-label">[[%ec_fe_message_text]]</label>
        <textarea type="text" name="text" class="form-control" rows="5" id="ec-text-[[+fid]]">[[+text]]</textarea>
        <span class="ec-error help-block" id="ec-text-error-[[+fid]]"></span>
    </div>

    <div class="form-actions">
        <input type="submit" class="btn btn-primary" name="send" value="[[%ec_fe_send]]" />
    </div>
</form>
<div id="ec-form-success-[[+fid]]"></div>',
    ),
  ),
  '286d924ee5ef0ffa78ca251b5e500504' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.Success',
    ),
    'object' => 
    array (
      'id' => 264,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.Success',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '<div class="alert alert-success" role="alert">
    [[%ec_fe_send_success]]
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_success.tpl',
      'content' => '<div class="alert alert-success" role="alert">
    [[%ec_fe_send_success]]
</div>',
    ),
  ),
  'e980966526eeea5679ab442404fd6d59' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.New.Email.User',
    ),
    'object' => 
    array (
      'id' => 265,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.New.Email.User',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставили сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Ваше сообщение будет опубликовано после проверки администратором.
<br />
<br />
С уважением, [[++site_name]].',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_new_email_user.tpl',
      'content' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставили сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Ваше сообщение будет опубликовано после проверки администратором.
<br />
<br />
С уважением, [[++site_name]].',
    ),
  ),
  'e4260e074fb5e96e8b20476326e64bff' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.New.Email.Manager',
    ),
    'object' => 
    array (
      'id' => 266,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.New.Email.Manager',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => 'На сайте [[++site_url]] было оставлено новое сообщение:
<br />
<br />
Автор: <span style="font-weight: bold">[[+user_name]]</span>
<br/>
Электронная почта: <span style="font-weight: bold">[[+user_email]]</span>
<br/>
Контактная информация: <span style="font-weight: bold">[[+user_contacts]]</span>
<br/>
<br/>
Тема сообщения: <span style="font-weight: bold">[[+subject]]</span>
<br/>
Оценка: <span style="font-weight: bold">[[+rating]]</span>
<br/>
Текст сообщения:
<br/>
<br/>
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Сообщение было оставлено на странице <a target="_blank" href="[[~[[+resource_id]]?scheme=`full`]]">[[+resource_pagetitle]]</a>
<br />
<br />
<a target="_blank" href="[[++site_url]]manager/?a=resource/update&id=[[+resource_id]]">Опубликовать или ответить на сообщение &gt;</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_new_email_manager.tpl',
      'content' => 'На сайте [[++site_url]] было оставлено новое сообщение:
<br />
<br />
Автор: <span style="font-weight: bold">[[+user_name]]</span>
<br/>
Электронная почта: <span style="font-weight: bold">[[+user_email]]</span>
<br/>
Контактная информация: <span style="font-weight: bold">[[+user_contacts]]</span>
<br/>
<br/>
Тема сообщения: <span style="font-weight: bold">[[+subject]]</span>
<br/>
Оценка: <span style="font-weight: bold">[[+rating]]</span>
<br/>
Текст сообщения:
<br/>
<br/>
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Сообщение было оставлено на странице <a target="_blank" href="[[~[[+resource_id]]?scheme=`full`]]">[[+resource_pagetitle]]</a>
<br />
<br />
<a target="_blank" href="[[++site_url]]manager/?a=resource/update&id=[[+resource_id]]">Опубликовать или ответить на сообщение &gt;</a>',
    ),
  ),
  '4d2d34d295e24914024553d642856fba' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecForm.Update.Email.User',
    ),
    'object' => 
    array (
      'id' => 267,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecForm.Update.Email.User',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставляли сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
[[+no_reply_and_published]][[+reply_and_published]][[+reply_and_not_published]]
<br />
<br />
С уважением, [[++site_name]].

<!--ec_no_reply_and_published
Ваше сообщение было опубликовано. Вы можете его просмотреть <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
<br />
Ваше сообщение с ответом на него опубликовано <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_not_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
-->

<!--ec_reply_author <span style="font-weight:bold;">[[+reply_author]]</span> ответил на ваше сообщение:-->
<!--ec_!reply_author На ваше сообщение дан ответ:-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_form_update_email_user.tpl',
      'content' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставляли сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
[[+no_reply_and_published]][[+reply_and_published]][[+reply_and_not_published]]
<br />
<br />
С уважением, [[++site_name]].

<!--ec_no_reply_and_published
Ваше сообщение было опубликовано. Вы можете его просмотреть <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
<br />
Ваше сообщение с ответом на него опубликовано <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_not_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
-->

<!--ec_reply_author <span style="font-weight:bold;">[[+reply_author]]</span> ответил на ваше сообщение:-->
<!--ec_!reply_author На ваше сообщение дан ответ:-->',
    ),
  ),
  '46422d6856bb4cf404d97b99ffa7d98f' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.ecThreadRating',
    ),
    'object' => 
    array (
      'id' => 268,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.ecThreadRating',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '<div class="ec-stars" title="[[+rating_wilson]]">
    <span style="width: [[+rating_wilson_percent]]%"></span>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/chunks/chunk.ec_thread_rating.tpl',
      'content' => '<div class="ec-stars" title="[[+rating_wilson]]">
    <span style="width: [[+rating_wilson_percent]]%"></span>
</div>',
    ),
  ),
  '07fa6d24163c056a8a61cee69b05671d' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecMessages',
    ),
    'object' => 
    array (
      'id' => 125,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecMessages',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$fastMode = !empty($fastMode);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';
// Query conditions
$select = array(
    $class => $modx->getSelectColumns($class, $class),
    $threadClass => $modx->getSelectColumns($threadClass, \'Thread\', \'thread_\'),
);
$innerJoin = array($threadClass => array(\'alias\' => \'Thread\', \'on\' => "`$class`.`thread` = `Thread`.`id`"));

$where = array();
if(count($threads) == 1) {
    $where[\'`Thread`.`name`\'] = $threads[0];
}
if(count($threads) > 1) {
    $where[\'`Thread`.`name`:IN\'] = $threads;
}


if(empty($showUnpublished)) {
    $where[$class.\'.published\'] = 1;
}

if(empty($showDeleted)) {
    $where[$class.\'.deleted\'] = 0;
}

if(!empty($subject)) {
    $where[$class.\'.subject\'] = $subject;
}

// Add custom parameters
foreach (array(\'where\',\'select\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $modx->fromJSON($scriptProperties[$v]);
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    //\'loadModels\' => \'easyComm\',
    \'disableConditions\' => true,
    \'where\' => $modx->toJSON($where),
    \'select\' => $modx->toJSON($select),
    \'innerJoin\' => $modx->toJSON($innerJoin),
    //\'groupby\' => $class.\'.id\',
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'ec_\'
);


// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);


$messages = $pdoFetch->run();

/* @var $tmpChunk modChunk */
$tmpChunk = $modx->newObject(\'modChunk\', array(\'name\' => "tmp-".uniqid()));
$tmpChunk->setCacheable(false);
$gravatarDefault = $tmpChunk->process(null, $modx->getOption(\'ec_gravatar_default\'));

$gravatarSize = $modx->getOption(\'ec_gravatar_size\', null, 50);

$output = array();
$idx = 0;
foreach($messages as $row) {
    $row[\'idx\'] = $idx++;
    $row[\'text_raw\'] = $row[\'text\'];
    $row[\'text\'] = nl2br($row[\'text\']);
    $row[\'reply_text_raw\'] = $row[\'reply_text\'];
    $row[\'reply_text\'] = nl2br($row[\'reply_text\']);

    $row[\'gravatar\'] = $gravatarDefault;
    if(!empty($row[\'user_email\'])) {
        $row[\'gravatar\'] = \'https://www.gravatar.com/avatar/\'.md5(strtolower($row[\'user_email\'])).\'?s=50\';
        if(!empty($gravatarDefault)) {
            $row[\'gravatar\'] .= \'&d=\'.urlencode($gravatarDefault);
        }
    }

    $tpl = $pdoFetch->defineChunk($row);
    if (empty($tpl)) {
        $output[] = \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\';
    }
    else {
        $output[] = $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
    if(empty($output) && !empty($tplEmpty)) {
        $output = $pdoFetch->getChunk($tplEmpty);
    }
    else {
        $output = implode($outputSeparator, $output);
    }
    $output .= $log;
    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $data = array(\'output\' => $output);
        if( (count($threads) == 1) && ($threadObj = $modx->getObject(\'ecThread\', array(\'name\' => $threads[0]))) ) {
            $ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);
            $data = array_merge($data, $threadObj->toArray(),
                array(
                    \'rating_wilson_percent\' => number_format($threadObj->get(\'rating_wilson\') / $ratingMax * 100, 3),
                    \'rating_simple_percent\' => number_format($threadObj->get(\'rating_simple\') / $ratingMax * 100, 3),
                )
            );
        }
        $output = $pdoFetch->getChunk($tplWrapper, $data, $pdoFetch->config[\'fastMode\']);
    }
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    }
    else {
        return $output;
    }
}',
      'locked' => 0,
      'properties' => 'a:15:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"threads";a:7:{s:4:"name";s:7:"threads";s:4:"desc";s:21:"easycomm_prop_threads";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"subject";a:7:{s:4:"name";s:7:"subject";s:4:"desc";s:21:"easycomm_prop_subject";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"easycomm_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"tpl.ecMessages.Row";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:24:"easycomm_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:8:"tplEmpty";a:7:{s:4:"name";s:8:"tplEmpty";s:4:"desc";s:22:"easycomm_prop_tplEmpty";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:20:"easycomm_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"date";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:21:"easycomm_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:19:"easycomm_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"easycomm_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"easycomm_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:29:"easycomm_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"easycomm_prop_toPlaceholder";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:22:"toSeparatePlaceholders";a:7:{s:4:"name";s:22:"toSeparatePlaceholders";s:4:"desc";s:36:"easycomm_prop_toSeparatePlaceholders";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:21:"easycomm_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_messages.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$fastMode = !empty($fastMode);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';
// Query conditions
$select = array(
    $class => $modx->getSelectColumns($class, $class),
    $threadClass => $modx->getSelectColumns($threadClass, \'Thread\', \'thread_\'),
);
$innerJoin = array($threadClass => array(\'alias\' => \'Thread\', \'on\' => "`$class`.`thread` = `Thread`.`id`"));

$where = array();
if(count($threads) == 1) {
    $where[\'`Thread`.`name`\'] = $threads[0];
}
if(count($threads) > 1) {
    $where[\'`Thread`.`name`:IN\'] = $threads;
}


if(empty($showUnpublished)) {
    $where[$class.\'.published\'] = 1;
}

if(empty($showDeleted)) {
    $where[$class.\'.deleted\'] = 0;
}

if(!empty($subject)) {
    $where[$class.\'.subject\'] = $subject;
}

// Add custom parameters
foreach (array(\'where\',\'select\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $modx->fromJSON($scriptProperties[$v]);
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    //\'loadModels\' => \'easyComm\',
    \'disableConditions\' => true,
    \'where\' => $modx->toJSON($where),
    \'select\' => $modx->toJSON($select),
    \'innerJoin\' => $modx->toJSON($innerJoin),
    //\'groupby\' => $class.\'.id\',
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'ec_\'
);


// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);


$messages = $pdoFetch->run();

/* @var $tmpChunk modChunk */
$tmpChunk = $modx->newObject(\'modChunk\', array(\'name\' => "tmp-".uniqid()));
$tmpChunk->setCacheable(false);
$gravatarDefault = $tmpChunk->process(null, $modx->getOption(\'ec_gravatar_default\'));

$gravatarSize = $modx->getOption(\'ec_gravatar_size\', null, 50);

$output = array();
$idx = 0;
foreach($messages as $row) {
    $row[\'idx\'] = $idx++;
    $row[\'text_raw\'] = $row[\'text\'];
    $row[\'text\'] = nl2br($row[\'text\']);
    $row[\'reply_text_raw\'] = $row[\'reply_text\'];
    $row[\'reply_text\'] = nl2br($row[\'reply_text\']);

    $row[\'gravatar\'] = $gravatarDefault;
    if(!empty($row[\'user_email\'])) {
        $row[\'gravatar\'] = \'https://www.gravatar.com/avatar/\'.md5(strtolower($row[\'user_email\'])).\'?s=50\';
        if(!empty($gravatarDefault)) {
            $row[\'gravatar\'] .= \'&d=\'.urlencode($gravatarDefault);
        }
    }

    $tpl = $pdoFetch->defineChunk($row);
    if (empty($tpl)) {
        $output[] = \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\';
    }
    else {
        $output[] = $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
    if(empty($output) && !empty($tplEmpty)) {
        $output = $pdoFetch->getChunk($tplEmpty);
    }
    else {
        $output = implode($outputSeparator, $output);
    }
    $output .= $log;
    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $data = array(\'output\' => $output);
        if( (count($threads) == 1) && ($threadObj = $modx->getObject(\'ecThread\', array(\'name\' => $threads[0]))) ) {
            $ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);
            $data = array_merge($data, $threadObj->toArray(),
                array(
                    \'rating_wilson_percent\' => number_format($threadObj->get(\'rating_wilson\') / $ratingMax * 100, 3),
                    \'rating_simple_percent\' => number_format($threadObj->get(\'rating_simple\') / $ratingMax * 100, 3),
                )
            );
        }
        $output = $pdoFetch->getChunk($tplWrapper, $data, $pdoFetch->config[\'fastMode\']);
    }
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    }
    else {
        return $output;
    }
}',
    ),
  ),
  '81105d3ca0b4d36af386cbef1f50cafe' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecMessagesCount',
    ),
    'object' => 
    array (
      'id' => 126,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecMessagesCount',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        /* @var string $thread */
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';

$q = $modx->newQuery($class);
$q->innerJoin($threadClass, \'Thread\', "`$class`.`thread` = `Thread`.`id`");

if(count($threads) == 1) {
    $q->where(array(
        \'`Thread`.`name`\' => $threads[0]
    ));
}
if(count($threads) > 1) {
    $q->where(array(
        \'`Thread`.`name`:IN\' => $threads
    ));
}
if(empty($showUnpublished)) {
    $q->where(array(
        $class.\'.published\' => 1
    ));
}
if(empty($showDeleted)) {
    $q->where(array(
        $class.\'.deleted\' => 0
    ));
}
if(!empty($subject)) {
    $q->where(array(
        $class.\'.subject\' => $subject
    ));
}

return $modx->getCount($class, $q);',
      'locked' => 0,
      'properties' => 'a:5:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"threads";a:7:{s:4:"name";s:7:"threads";s:4:"desc";s:21:"easycomm_prop_threads";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"subject";a:7:{s:4:"name";s:7:"subject";s:4:"desc";s:21:"easycomm_prop_subject";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:29:"easycomm_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:25:"easycomm_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_messages_count.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $threads */
$threads = $modx->getOption(\'threads\', $scriptProperties, \'\');
if($threads == \'*\') {
    $threads = array();
}
else {
    if(empty($threads)) {
        /* @var string $thread */
        $threads = $modx->getOption(\'thread\', $scriptProperties, \'\');
        if(empty($threads)) {
            $threads = \'resource-\'.$modx->resource->get(\'id\');
        }
    }
    $threads = explode(",", $threads);
    $threads = array_map(\'trim\', $threads);
}

$class = \'ecMessage\';
$threadClass = \'ecThread\';

$q = $modx->newQuery($class);
$q->innerJoin($threadClass, \'Thread\', "`$class`.`thread` = `Thread`.`id`");

if(count($threads) == 1) {
    $q->where(array(
        \'`Thread`.`name`\' => $threads[0]
    ));
}
if(count($threads) > 1) {
    $q->where(array(
        \'`Thread`.`name`:IN\' => $threads
    ));
}
if(empty($showUnpublished)) {
    $q->where(array(
        $class.\'.published\' => 1
    ));
}
if(empty($showDeleted)) {
    $q->where(array(
        $class.\'.deleted\' => 0
    ));
}
if(!empty($subject)) {
    $q->where(array(
        $class.\'.subject\' => $subject
    ));
}

return $modx->getCount($class, $q);',
    ),
  ),
  '2ca9dbabd51aaa17fc99e260f7805855' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecForm',
    ),
    'object' => 
    array (
      'id' => 127,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}
$easyComm->initialize($modx->context->key, $scriptProperties);

$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoTools = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoTools = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoTools from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}

$tplForm = $modx->getOption(\'tplForm\', $scriptProperties, \'tpl.ecForm\');
$threadName = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($threadName)) {
    $threadName = \'resource-\'.$modx->resource->get(\'id\');
    $scriptProperties[\'thread\'] = $threadName;
}
$formId = $modx->getOption(\'formId\', $scriptProperties, \'\');
if(empty($formId)) {
    $formId = $threadName;
    $scriptProperties[\'formId\'] = $formId;
}

// Prepare ecThread
/** @var ecThread $thread */
if (!$thread = $modx->getObject(\'ecThread\', array(\'name\' => $threadName))) {
    $thread = $modx->newObject(\'ecThread\');
    $thread->fromArray(array(
        \'resource\' => $modx->resource->id,
        \'name\' => $threadName,
        \'title\' => $modx->getOption(\'threadTitle\', $scriptProperties, \'\'),
    ));
}
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$data = array(
    \'fid\' => $formId,
    \'thread\' => $thread->get(\'name\'),
    \'antispam_field\' => $modx->getOption(\'antispamField\', $scriptProperties)
);

if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $profile = $modx->user->getOne(\'Profile\');
    $data[\'user_name\'] = $profile->get(\'fullname\');
    if(empty($data[\'user_name\'])) {
        $data[\'user_name\'] = $modx->user->get(\'username\');
    }
    $data[\'user_email\'] = $profile->get(\'email\');
}

return $pdoTools->getChunk($tplForm, $data);',
      'locked' => 0,
      'properties' => 'a:14:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:6:"formId";a:7:{s:4:"name";s:6:"formId";s:4:"desc";s:20:"easycomm_prop_formId";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"allowedFields";a:7:{s:4:"name";s:13:"allowedFields";s:4:"desc";s:27:"easycomm_prop_allowedFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:54:"user_name,user_email,user_contacts,subject,rating,text";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:28:"easycomm_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:14:"user_name,text";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"antispamField";a:7:{s:4:"name";s:13:"antispamField";s:4:"desc";s:27:"easycomm_prop_antispamField";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:7:"address";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:11:"autoPublish";a:7:{s:4:"name";s:11:"autoPublish";s:4:"desc";s:25:"easycomm_prop_autoPublish";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:2:"No";s:5:"value";s:0:"";}i:1;a:2:{s:4:"text";s:11:"Only logged";s:5:"value";s:10:"OnlyLogged";}i:2;a:2:{s:4:"text";s:3:"All";s:5:"value";s:3:"All";}}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:7:"tplForm";a:7:{s:4:"name";s:7:"tplForm";s:4:"desc";s:21:"easycomm_prop_tplForm";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"tpl.ecForm";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:10:"tplSuccess";a:7:{s:4:"name";s:10:"tplSuccess";s:4:"desc";s:24:"easycomm_prop_tplSuccess";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"tpl.ecForm.Success";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:16:"newEmailSubjUser";a:7:{s:4:"name";s:16:"newEmailSubjUser";s:4:"desc";s:30:"easycomm_prop_newEmailSubjUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:15:"tplNewEmailUser";a:7:{s:4:"name";s:15:"tplNewEmailUser";s:4:"desc";s:29:"easycomm_prop_tplNewEmailUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:25:"tpl.ecForm.New.Email.User";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:19:"newEmailSubjManager";a:7:{s:4:"name";s:19:"newEmailSubjManager";s:4:"desc";s:33:"easycomm_prop_newEmailSubjManager";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:18:"tplNewEmailManager";a:7:{s:4:"name";s:18:"tplNewEmailManager";s:4:"desc";s:32:"easycomm_prop_tplNewEmailManager";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.ecForm.New.Email.Manager";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:19:"updateEmailSubjUser";a:7:{s:4:"name";s:19:"updateEmailSubjUser";s:4:"desc";s:33:"easycomm_prop_updateEmailSubjUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:18:"tplUpdateEmailUser";a:7:{s:4:"name";s:18:"tplUpdateEmailUser";s:4:"desc";s:32:"easycomm_prop_tplUpdateEmailUser";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.ecForm.Update.Email.User";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_form.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}
$easyComm->initialize($modx->context->key, $scriptProperties);

$fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoTools = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoTools = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoTools from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}

$tplForm = $modx->getOption(\'tplForm\', $scriptProperties, \'tpl.ecForm\');
$threadName = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($threadName)) {
    $threadName = \'resource-\'.$modx->resource->get(\'id\');
    $scriptProperties[\'thread\'] = $threadName;
}
$formId = $modx->getOption(\'formId\', $scriptProperties, \'\');
if(empty($formId)) {
    $formId = $threadName;
    $scriptProperties[\'formId\'] = $formId;
}

// Prepare ecThread
/** @var ecThread $thread */
if (!$thread = $modx->getObject(\'ecThread\', array(\'name\' => $threadName))) {
    $thread = $modx->newObject(\'ecThread\');
    $thread->fromArray(array(
        \'resource\' => $modx->resource->id,
        \'name\' => $threadName,
        \'title\' => $modx->getOption(\'threadTitle\', $scriptProperties, \'\'),
    ));
}
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$data = array(
    \'fid\' => $formId,
    \'thread\' => $thread->get(\'name\'),
    \'antispam_field\' => $modx->getOption(\'antispamField\', $scriptProperties)
);

if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $profile = $modx->user->getOne(\'Profile\');
    $data[\'user_name\'] = $profile->get(\'fullname\');
    if(empty($data[\'user_name\'])) {
        $data[\'user_name\'] = $modx->user->get(\'username\');
    }
    $data[\'user_email\'] = $profile->get(\'email\');
}

return $pdoTools->getChunk($tplForm, $data);',
    ),
  ),
  'a08b8f76d74e6755aea1205cf4675c31' => 
  array (
    'criteria' => 
    array (
      'name' => 'ecThreadRating',
    ),
    'object' => 
    array (
      'id' => 128,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'ecThreadRating',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $thread */
$thread = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($thread)) {
    $thread = \'resource-\'.$modx->resource->get(\'id\');
}

/* @var MODx $modx */
/* @var ecThread $thread */
$thread = $modx->getObject(\'ecThread\', array(\'name\' => $thread));
if(empty($thread)) {
    return;
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}

$fastMode = !empty($fastMode);

$ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);
$data = array_merge(
    $thread->toArray(),
    array(
        \'rating_wilson_percent\' => number_format($thread->get(\'rating_wilson\') / $ratingMax * 100, 3),
        \'rating_simple_percent\' => number_format($thread->get(\'rating_simple\') / $ratingMax * 100, 3),
    )
);

$output = $pdoFetch->getChunk($tpl, $data, $fastMode);

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
}
else {
    return $output;
}',
      'locked' => 0,
      'properties' => 'a:3:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:20:"easycomm_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:27:"easycomm_prop_toPlaceholder";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:17:"easycomm_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"tpl.ecThreadRating";s:7:"lexicon";s:19:"easycomm:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/snippets/snippet.ec_thread_rating.php',
      'content' => '/** @var array $scriptProperties */
/** @var easyComm $easyComm */
if (!$easyComm = $modx->getService(\'easyComm\', \'easyComm\', $modx->getOption(\'ec_core_path\', null, $modx->getOption(\'core_path\') . \'components/easycomm/\') . \'model/easycomm/\', $scriptProperties)) {
    return \'Could not load easyComm class!\';
}

/* @var string $thread */
$thread = $modx->getOption(\'thread\', $scriptProperties, \'\');
if(empty($thread)) {
    $thread = \'resource-\'.$modx->resource->get(\'id\');
}

/* @var MODx $modx */
/* @var ecThread $thread */
$thread = $modx->getObject(\'ecThread\', array(\'name\' => $thread));
if(empty($thread)) {
    return;
}

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
    return false;
}

$fastMode = !empty($fastMode);

$ratingMax = (float)$modx->getOption(\'ec_rating_max\', $scriptProperties, 5);
$data = array_merge(
    $thread->toArray(),
    array(
        \'rating_wilson_percent\' => number_format($thread->get(\'rating_wilson\') / $ratingMax * 100, 3),
        \'rating_simple_percent\' => number_format($thread->get(\'rating_simple\') / $ratingMax * 100, 3),
    )
);

$output = $pdoFetch->getChunk($tpl, $data, $fastMode);

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
}
else {
    return $output;
}',
    ),
  ),
  '34a5385a318492d9c69ae94ddeb73f5b' => 
  array (
    'criteria' => 
    array (
      'name' => 'easyComm',
    ),
    'object' => 
    array (
      'id' => 35,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'easyComm',
      'description' => '',
      'editor_type' => 0,
      'category' => 51,
      'cache_type' => 0,
      'plugincode' => '/** @var array $scriptProperties */
switch ($modx->event->name) {
    case \'OnDocFormRender\':
        /** @var modResource $resource */
        if ($mode == \'new\') {
            return;
        }

        $template = $resource->get(\'template\');
        $showTemplates = trim($modx->getOption(\'ec_show_templates\'));
        $showResources = trim($modx->getOption(\'ec_show_resources\'));
        $showTab = false;
        if($showTemplates == \'*\' || $showResources == \'*\') {
            $showTab = true;
        }
        else {
            $showTemplates = array_map(\'trim\', explode(\',\', $showTemplates));
            $showResources = array_map(\'trim\', explode(\',\', $showResources));
            if (in_array($template, $showTemplates) || in_array($resource->get(\'id\'), $showResources)) {
                $showTab = true;
            }
        }

        if(!$showTab) {
            return;
        }

        $modx23 = !empty($modx->version) && version_compare($modx->version[\'full_version\'], \'2.3.0\', \'>=\');
        $modx->controller->addHtml(\'<script type="text/javascript">
			Ext.onReady(function() {
				MODx.modx23 = \' . (int)$modx23 . \';
			});
		</script>\');


        /** @var easyComm $easyComm */
        $easyComm = $modx->getService(\'easyComm\', \'easyComm\', MODX_CORE_PATH.\'components/easycomm/model/easycomm/\');
        $modx->controller->addLexiconTopic(\'easycomm:default\');
        $url = $easyComm->config[\'assetsUrl\'];
        $modx->controller->addJavascript($url . \'js/mgr/easycomm.js\');

        $modx->controller->addLastJavascript($url . \'js/mgr/misc/utils.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/page.panel.js\');

        $modx->controller->addCss($url . \'css/mgr/main.css\');

        // TODO: разобраться, почему без этого не работает подключение плагинов
        $modx->newObject(\'ecMessage\');

        $pluginsJS = $easyComm->getPluginsJS();
        if(!empty($pluginsJS)){
            foreach($pluginsJS as $js) {
                $modx->controller->addJavascript($js);
            }
        }

        $defaultReplyAuthor = \'\';
        if($modx->getOption(\'ec_auto_reply_author\')) {
            $defaultReplyAuthor = addslashes($modx->user->getOne(\'Profile\')->get(\'fullname\'));
        }

        $ecConfig = \'
            easyComm.config.thread_fields = \' . json_encode($easyComm->getThreadFields()) . \';
            easyComm.config.thread_grid_fields = \' . json_encode($easyComm->getThreadGridFields()) . \';
            easyComm.config.thread_window_fields = \' . json_encode($easyComm->getThreadWindowFields()) . \';
            easyComm.config.message_fields = \' . json_encode($easyComm->getMessageFields()) . \';
            easyComm.config.message_grid_fields = \' . json_encode($easyComm->getMessageGridFields()) . \';
            easyComm.config.message_window_layout = \' . $easyComm->getMessageWindowLayout() . \';
            easyComm.config.default_reply_author = "\' . $defaultReplyAuthor . \'";
        \';

        if ($modx->getCount(\'modPlugin\', array(\'name\' => \'AjaxManager\', \'disabled\' => false))) {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.onReady(function() {
					window.setTimeout(function() {
						var tabs = Ext.getCmp("modx-resource-tabs");
						if (tabs) {
							tabs.add({
								xtype: "ec-panel-page",
								id: "ec-panel-page",
								title: _("ec"),
								record: {
									id: \' . $resource->get(\'id\') . \'
								}
							});
						}
					}, 10);
				});
			</script>\');
        }
        else {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.ComponentMgr.onAvailable("modx-resource-tabs", function() {
					this.on("beforerender", function() {
						this.add({
							xtype: "ec-panel-page",
							id: "ec-panel-page",
							title: _("ec"),
							record: {
								id: \' . $resource->get(\'id\') . \'
							}
						});
					});
					Ext.apply(this, {
							stateful: true,
							stateId: "modx-resource-tabs-state",
							stateEvents: ["tabchange"],
							getState: function() {return {activeTab:this.items.indexOf(this.getActiveTab())};
						}
					});
				});
			</script>\');
        }

        break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/easycomm/elements/plugins/plugin.easycomm.php',
      'content' => '/** @var array $scriptProperties */
switch ($modx->event->name) {
    case \'OnDocFormRender\':
        /** @var modResource $resource */
        if ($mode == \'new\') {
            return;
        }

        $template = $resource->get(\'template\');
        $showTemplates = trim($modx->getOption(\'ec_show_templates\'));
        $showResources = trim($modx->getOption(\'ec_show_resources\'));
        $showTab = false;
        if($showTemplates == \'*\' || $showResources == \'*\') {
            $showTab = true;
        }
        else {
            $showTemplates = array_map(\'trim\', explode(\',\', $showTemplates));
            $showResources = array_map(\'trim\', explode(\',\', $showResources));
            if (in_array($template, $showTemplates) || in_array($resource->get(\'id\'), $showResources)) {
                $showTab = true;
            }
        }

        if(!$showTab) {
            return;
        }

        $modx23 = !empty($modx->version) && version_compare($modx->version[\'full_version\'], \'2.3.0\', \'>=\');
        $modx->controller->addHtml(\'<script type="text/javascript">
			Ext.onReady(function() {
				MODx.modx23 = \' . (int)$modx23 . \';
			});
		</script>\');


        /** @var easyComm $easyComm */
        $easyComm = $modx->getService(\'easyComm\', \'easyComm\', MODX_CORE_PATH.\'components/easycomm/model/easycomm/\');
        $modx->controller->addLexiconTopic(\'easycomm:default\');
        $url = $easyComm->config[\'assetsUrl\'];
        $modx->controller->addJavascript($url . \'js/mgr/easycomm.js\');

        $modx->controller->addLastJavascript($url . \'js/mgr/misc/utils.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/threads.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.grid.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/messages.windows.js\');
        $modx->controller->addLastJavascript($url . \'js/mgr/widgets/page.panel.js\');

        $modx->controller->addCss($url . \'css/mgr/main.css\');

        // TODO: разобраться, почему без этого не работает подключение плагинов
        $modx->newObject(\'ecMessage\');

        $pluginsJS = $easyComm->getPluginsJS();
        if(!empty($pluginsJS)){
            foreach($pluginsJS as $js) {
                $modx->controller->addJavascript($js);
            }
        }

        $defaultReplyAuthor = \'\';
        if($modx->getOption(\'ec_auto_reply_author\')) {
            $defaultReplyAuthor = addslashes($modx->user->getOne(\'Profile\')->get(\'fullname\'));
        }

        $ecConfig = \'
            easyComm.config.thread_fields = \' . json_encode($easyComm->getThreadFields()) . \';
            easyComm.config.thread_grid_fields = \' . json_encode($easyComm->getThreadGridFields()) . \';
            easyComm.config.thread_window_fields = \' . json_encode($easyComm->getThreadWindowFields()) . \';
            easyComm.config.message_fields = \' . json_encode($easyComm->getMessageFields()) . \';
            easyComm.config.message_grid_fields = \' . json_encode($easyComm->getMessageGridFields()) . \';
            easyComm.config.message_window_layout = \' . $easyComm->getMessageWindowLayout() . \';
            easyComm.config.default_reply_author = "\' . $defaultReplyAuthor . \'";
        \';

        if ($modx->getCount(\'modPlugin\', array(\'name\' => \'AjaxManager\', \'disabled\' => false))) {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.onReady(function() {
					window.setTimeout(function() {
						var tabs = Ext.getCmp("modx-resource-tabs");
						if (tabs) {
							tabs.add({
								xtype: "ec-panel-page",
								id: "ec-panel-page",
								title: _("ec"),
								record: {
									id: \' . $resource->get(\'id\') . \'
								}
							});
						}
					}, 10);
				});
			</script>\');
        }
        else {
            $modx->controller->addHtml(\'
			<script type="text/javascript">
				easyComm.config = \' . $modx->toJSON($easyComm->config) . \';
				easyComm.config.connector_url = "\' . $easyComm->config[\'connectorUrl\'] . \'";
				\'.$ecConfig.\'
				Ext.ComponentMgr.onAvailable("modx-resource-tabs", function() {
					this.on("beforerender", function() {
						this.add({
							xtype: "ec-panel-page",
							id: "ec-panel-page",
							title: _("ec"),
							record: {
								id: \' . $resource->get(\'id\') . \'
							}
						});
					});
					Ext.apply(this, {
							stateful: true,
							stateId: "modx-resource-tabs-state",
							stateEvents: ["tabchange"],
							getState: function() {return {activeTab:this.items.indexOf(this.getActiveTab())};
						}
					});
				});
			</script>\');
        }

        break;
}',
    ),
  ),
  'c27436c7da887a38abbd097e85c35013' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 35,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 35,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);