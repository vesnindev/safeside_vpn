<?php
//Кнопки
$howSetup = 'Как настроить';
$buy = 'Купить';
$extend = 'Продлить';
$status = 'Узнать статус';

//inline-кнопки
$buy_30_days = 'Купить 30 дней за 149р.';
$extend_30_days = 'Продлить на 30 дней за 149р.';
$buy_90_days = 'Купить 90 дней за 399р.';
$extend_90_days = 'Продлить на 90 дней за 399р.';
$buy_365_days = 'Купить 365 дней за 1499р.';
$extend_365_days = 'Продлить на 365 дней за 1499р.';
$ios_url = 'https://apps.apple.com/ru/app/wireguard/id1441195209?ls=1';
$android_url = 'https://play.google.com/store/apps/details?id=com.wireguard.android';
$macos_url = 'https://apps.apple.com/ru/app/wireguard/id1451685025?ls=1&mt=12';
$windows_url = 'https://download.wireguard.com/windows-client/wireguard-installer.exe';

//callback статусы
$paid_30 = 'paid_30';
$paid_90 = 'paid_90';
$paid_365 = 'paid_365';
$pay_30 = 'pay_30';
$pay_90 = 'pay_90';
$pay_365 = 'pay_365';
$prolong_30 = 'prolong_30';
$prolong_90 = 'prolong_90';
$prolong_365 = 'prolong_365';
$prolongation_30 = 'Продление подписки на 30 дней';
$prolongation_90 = 'Продление подписки на 90 дней';
$prolongation_365 = 'Продление подписки на 365 дней';
$description_payment_30 = 'Оплата подписки на 30 дней';
$description_payment_90 = 'Оплата подписки на 90 дней';
$description_payment_365 = 'Оплата подписки на 365 дней';
$reminder = 'reminder';
$sum_30 = '149.00';
$sum_90 = '399.00';
$sum_365 = '1499.00';
$return_url = 'url/return_url.php';
$days_30 = strtotime('+30 day');
$days_90 = strtotime('+90 day');
$days_365 = strtotime('+365 day');

//Клавиатуры
$keyboard_main = [
    [
        ['text' => $howSetup],
        ['text' => $buy],
    ],
    [
        ['text' => $extend],
        ['text' => $status],
    ],
];

$keyboard_setting = [
    [
        ['text' => 'iOS', 'url' => $ios_url],
        ['text' => 'Android', 'url' => $android_url],
    ],
    [
        ['text' => 'MacOS', 'url' => $macos_url],
        ['text' => 'Windows', 'url' => $windows_url],
    ],
];

$keyboard_buy = [
    [
        ['text' => $buy_30_days, 'callback_data' => $pay_30],
    ],
    [
        ['text' => $buy_90_days, 'callback_data' => $pay_90],
    ],
    [
        ['text' => $buy_365_days, 'callback_data' => $pay_365],
    ],
];

$keyboard_prolong = [
    [
        ['text' => $extend_30_days, 'callback_data' => $prolong_30],
    ],
    [
        ['text' => $extend_90_days, 'callback_data' => $prolong_90],
    ],
    [
        ['text' => $extend_365_days, 'callback_data' => $prolong_365],
    ],
];

$keyboard_url = [
    [
        ['text' => 'iOS', 'url' => $ios_url],
        ['text' => 'Android', 'url' => $android_url],
    ],
    [
        ['text' => 'MacOS', 'url' => $macos_url],
        ['text' => 'Windows', 'url' => $windows_url],
    ]
];




