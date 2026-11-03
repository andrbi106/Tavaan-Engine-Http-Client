<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Http-Client Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور http-client — همهٔ کلیدهای مستندشده در `docs/03-engines/http-client.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/http-client.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('HTTP-CLIENT_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('HTTP-CLIENT_PREFIX', 'http-client:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('HTTP-CLIENT_LOG_CHANNEL', 'http-client'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Http',
        'accessor' => 'http',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];