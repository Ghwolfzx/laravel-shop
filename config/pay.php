<?php

return [
    'alipay' => [
        'app_id'         => '2016082000292208',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1AjrCPHQR19gMFYaTdloyQp56xJ6mHKO7w9CYesx7t8VzSFYeoaESN6vL4YN5jX0RG8QlxtKzyU9BjyVBM2OvoeIXOuw8dYFIOajPAYGnfVuhfZ3jUSlBLwA0XDtJ6p+NMiYY6iSAxgJYfo/0yQKEmCSgsqyjMT6fpakSa/qDx4dOSrRhlThdsxV29Ni2gis+iQzzYdTqlZXhWJ+Z3u/zpvztbkP3T5UcS+xgbz54Tayy69CngjxyzuKozvbE9d8u2NZeU/sEIpIJUzyq4CwtGH2j9u5H++Ub28tjBcKEqyT9w4Bdrj/4jljYkMLGstfBlC8hnebMVptdtOOW45TuQIDAQAB',
        'private_key'    => '',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
