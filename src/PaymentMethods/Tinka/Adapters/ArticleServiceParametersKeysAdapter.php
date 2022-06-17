<?php

namespace Buckaroo\PaymentMethods\Tinka\Adapters;

use Buckaroo\Models\Adapters\ServiceParametersKeysAdapter;

class ArticleServiceParametersKeysAdapter extends ServiceParametersKeysAdapter
{
    protected array $keys = [
        'price'        => 'UnitGrossPrice'
    ];
}