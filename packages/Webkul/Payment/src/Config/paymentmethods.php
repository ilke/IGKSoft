<?php

return [
    'cashondelivery'  => [
        'code'        => 'cashondelivery',
        'title'       => 'Cash On Delivery',
        'description' => 'Cash On Delivery',
        'class'       => 'Webkul\Payment\Payment\CashOnDelivery',
        'active'      => true,
        'sort'        => 1,
    ],

    'moneytransfer'   => [
        'code'        => 'moneytransfer',
        'title'       => 'Money Transfer',
        'description' => 'Money Transfer',
        'class'       => 'Webkul\Payment\Payment\MoneyTransfer',
        'active'      => true,
        'sort'        => 2,
    ],

    'iyzico' => [
        'code'        => 'iyzico',
        'title'       => 'Iyzico',
        'description' => 'Pay securely using Iyzico.',
        'class'       => 'Webkul\\Payment\\Payment\\Iyzico',
        'active'      => true,
        'sort'        => 3,
    ],

    'ziraatpay' => [
        'code'        => 'ziraatpay',
        'title'       => 'Ziraat Bankası Kredi Kartı',
        'description' => 'Ziraat Bankası ile güvenli ödeme',
        'class'       => 'Webkul\\Payment\\Payment\\ZiraatPay',
        'active'      => true,
        'sort'        => 4,
    ],
];
