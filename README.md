# Laravel Cbu Validator
Set Offline Conversion Facebook for Laravel 5

## Install

Via Composer

``` bash
$ composer require danielbartet/offline-conversions-fb
```

Set providers in app/config.php
``` php
'providers' => [
    danielbartet\OfflineConversion\OfflineConversionFBServiceProvider::class,
]
```

Set environment variable
```
OC_ACCESS_TOKEN = Access token admin user app
OC_EVENT_NAME = Event name for offline conversion
OC_UPLOAD_TAG = Name for upload tag
OC_CURRENCY = Type of currency
OC_PRODUCT_CATEGORY = Name for product category conversion
OC_ID_EVENT_SET = Id event set offline conversion
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

© 2017 [Daniel Walter Bartet]
