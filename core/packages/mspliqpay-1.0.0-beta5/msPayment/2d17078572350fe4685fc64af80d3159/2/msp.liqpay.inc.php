<?php

$_lang['setting_ms2_payment_liqpay_url'] = 'Адрес для запросов';
$_lang['setting_ms2_payment_liqpay_url_desc'] = 'Адрес для отправки запросов на удалённый сервис Robokassa';

$_lang['setting_ms2_payment_liqpay_private_key'] = 'Приватный ключ';
$_lang['setting_ms2_payment_liqpay_private_key_desc'] = 'Уникальный идентификатор магазина, который вы указали при настройке магазина в LiqPay.';

$_lang['setting_ms2_payment_liqpay_public_key'] = 'Публичный ключ';
$_lang['setting_ms2_payment_liqpay_public_key_desc'] = 'Используется интерфейсом инициализации оплаты.';

$_lang['setting_ms2_payment_liqpay_currency'] = 'Предлагаемая валюта платежа';
$_lang['setting_ms2_payment_liqpay_currency_desc'] = 'Возможные значения: USD, EUR, RUB, UAH, GEL';

$_lang['setting_ms2_payment_liqpay_culture'] = 'Язык LiqPay';
$_lang['setting_ms2_payment_liqpay_culture_desc'] = 'Укажите код языка, на котором показывать сайт LiqPay при оплате. Возможные значения: ru, en';

$_lang['setting_ms2_payment_liqpay_success_id'] = 'Страница успешной оплаты LiqPay';
$_lang['setting_ms2_payment_liqpay_success_id_desc'] = 'Пользователь будет отправлен на эту страницу после завершения оплаты. Рекомендуется указать id страницы с корзиной, для вывода заказа.';

$_lang['setting_ms2_payment_liqpay_failure_id'] = 'Страница отказа от оплаты LiqPay';
$_lang['setting_ms2_payment_liqpay_failure_id_desc'] = 'Пользователь будет отправлен на эту страницу при неудачной оплате. Рекомендуется указать id страницы с корзиной, для вывода заказа';

$_lang['setting_ms2_payment_liqpay_sandbox'] = 'Включить тестовый режим для разработчика';
$_lang['setting_ms2_payment_liqpay_sandbox_desc'] = 'В тестовом режиме деньги с карты не списываются. Чтобы включить тестовый режим, необходимо установить значение 1 (0 - выключить). Все тестовые платежи будут иметь статус sandbox - успешный тестовый платеж.';
