<?php
/**
 * @file
 * 
 * Report product availability.
 */

if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}

require_once 'config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CORE_PATH . 'model/modx/filters/modoutputfilter.class.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('web');
$modx->getService('error', 'error.modError', '', '');
$modx->getRequest();
$modx->getParser();

// 
$paramArr = array(
    'message_subject' =>'Запрос по товару не в наличии',
    'one_ckick_name' => $_POST['name'],
    'one_ckick_phone' => $_POST['phone'],
    'one_ckick_page' => $modx->makeUrl($_POST['product_id'], '', '', 'full'),
    'sms_tvs' => '81,80',
    'message_success' => 'Ваш запрос успешно отправлен!'
);
$message_chunk = $modx->getChunk('oneClickBuyRuCHNK', $paramArr);

// Получатели.
$emails = $modx->getOption('ms2_email_manager');
$to = !empty($emails) ? $emails : "sales@bodybuilding.ua";

// Тема/subject
$subject = '=?utf-8?B?' . base64_encode($paramArr['message_subject']) . '?=';

// Сообщение
$email_message = '<html>
    <head>
        <title>' . $subject . '</title>
    </head>
    <body>
        ' . $message_chunk . '
    </body>
</html>';
    
// Для отправки HTML-почты вы можете установить шапку Content-type.
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
// Дополнительные шапки.
$headers .= "From: noreply@bodybuilding.ua\r\n";

// Отправка.
$sendmail = mail($to, $subject, $email_message, $headers);
if ($sendmail) {
    $result = $paramArr['message_success'];
    // Отправка СМС
    $cur_time = date('G.i');
    $sms_tvs_arr = explode(',', $paramArr['sms_tvs']);
    if ( $cur_time > 9 && $cur_time < 20) {
        $tvId = $sms_tvs_arr[0];
    }
    else  {
        $tvId = $sms_tvs_arr[1];
    }
    
    $tvr = $modx->getObject('modTemplateVarResource', array(
        'tmplvarid' => $tvId,
        'contentid' => 3353
    ));
    $text = str_replace('[[+name]]', $paramArr['one_ckick_name'], $tvr->get('value'));
    $sms = $modx->runSnippet('smsSend', array('phone' => $paramArr['one_ckick_phone'], 'text' => $text));
}
else {
    $result = "Ошибка при отправке.";
}
    
echo $result;