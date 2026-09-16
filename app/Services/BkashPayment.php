<?php
namespace App\Services;
use App\Contracts\PaymentInterface;
class BkashPayment implements PaymentInterface
{
    public function pay()
    {
        return "Payment done by Bkash";
    }
}