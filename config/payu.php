<?php

use Tzsk\Payu\Gateway\Gateway;
use Tzsk\Payu\Gateway\PayuBiz;
use Tzsk\Payu\Gateway\PayuMoney;
use Tzsk\Payu\Models\PayuTransaction;

return [
    'default' => env('PAYU_DEFAULT_GATEWAY', 'money'),

    'gateways' => [
        'money' => new PayuMoney([
            'mode' => env('PAYU_MONEY_MODE', Gateway::TEST_MODE),
            'key' => env('PAYU_MONEY_KEY', '9TYmuIQb'),
            'salt' => env('PAYU_MONEY_SALT', 'OwSRUKWdDs'),
            'auth' => env('PAYU_MONEY_AUTH', 'GuxWi2YjYRiL7PKTuULWcEIUJGrvcqmZuCUkq+iYRYg='),
        ]),

        'biz' => new PayuBiz([
            'mode' => env('PAYU_BIZ_MODE', Gateway::TEST_MODE),
            'key' => env('PAYU_BIZ_KEY', 'gtKFFx'),
            'salt' => env('PAYU_BIZ_SALT', 'eCwWELxi'),
        ]),
    ],

    'verify' => [
        PayuTransaction::STATUS_PENDING,
    ],
];
