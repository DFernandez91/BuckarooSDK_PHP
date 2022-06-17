<?php

namespace Buckaroo\PaymentMethods\WeChatPay;

use Buckaroo\Models\Model;
use Buckaroo\PaymentMethods\PaymentMethod;
use Buckaroo\PaymentMethods\WeChatPay\Models\Pay;
use Buckaroo\Transaction\Response\TransactionResponse;

class WeChatPay extends PaymentMethod
{
    protected string $paymentName = 'WeChatPay';

    public function pay(?Model $model = null): TransactionResponse
    {
        return parent::pay(new Pay($this->payload));
    }
}