<?php
/**
 * @file
 * 
 * Contact form processing.
 */
 
header('Content-Type: application/json');

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

// message_chunk
$paramArr = json_decode($_POST['data'], true);
$returnCHNK = $modx->getChunk($paramArr['message_chunk'], $paramArr);

// Получатели.
$to = isset($paramArr['message_to_email']) ? $paramArr['message_to_email'] : 'sales@bodybuilding.ua';
// var_dump(explode(',', $to));
// Тема/subject
$subject = "=?utf-8?B?" . base64_encode($paramArr['message_subject']) . "?=";

// Сообщение
$email_message = '<html>
    <head>
        <title>' . $subject . '</title>
    </head>
    <body>
        ' . $returnCHNK . '
    </body>
</html>';

// Set default value. 
$sendmail = false;

if ($modx->getOption('mail_use_smtp') == 1) {
    // Send mail through smtp.
    $receivers = explode(',', $to);
    $modx->getService('mail', 'mail.modPHPMailer');
    $modx->mail->set(modMail::MAIL_BODY, $email_message);
    $modx->mail->set(modMail::MAIL_FROM, $modx->getOption('mail_smtp_user'));
    $modx->mail->set(modMail::MAIL_SUBJECT, $subject);
    $modx->mail->set(modMail::MAIL_FROM_NAME, 'BodyBuilding.ua');
    foreach ($receivers as $receiver) {
        $modx->mail->address('to', $receiver);
    }
    $modx->mail->setHTML(true);
    $sendmail = $modx->mail->send();
    if (!$sendmail) {
        $modx->log(modX::LOG_LEVEL_ERROR, 'An error occurred while trying to send the email: ' . $modx->mail->mailer->ErrorInfo);
    }
    $modx->mail->reset();
}
else {
    // Send email by mail() function.
    // Для отправки HTML-почты вы можете установить шапку Content-type.
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    // Дополнительные шапки.
    $headers .= "From: noreply@bodybuilding.ua\r\n";
    
    // Отправка.
    $sendmail = mail($to, $subject, $email_message, $headers);  
}

if ($sendmail) {
    $result = $paramArr['message_success'];
    if (isset($paramArr['one_ckick_phone'])) {
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
}
else {
  $result = 'Ошибка при отправке.'; 
}
    
echo json_encode(array(
    'result' => $result
));