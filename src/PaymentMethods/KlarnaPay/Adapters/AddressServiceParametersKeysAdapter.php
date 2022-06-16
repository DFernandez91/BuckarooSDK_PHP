<?php

namespace Buckaroo\PaymentMethods\KlarnaPay\Adapters;

use Buckaroo\Models\Adapters\ServiceParametersKeysAdapter;

class AddressServiceParametersKeysAdapter extends ServiceParametersKeysAdapter
{
    protected array $keys = [
        'houseNumber'               => 'StreetNumber',
        'houseNumberAdditional'     => 'StreetNumberAdditional',
        'zipcode'                   => 'PostalCode'
    ];
}