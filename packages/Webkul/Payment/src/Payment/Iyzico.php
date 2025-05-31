<?php

namespace Webkul\Payment\Payment;

use Webkul\Payment\Payment\Payment;

class Iyzico extends Payment
{
    /**
     * Payment method code.
     *
     * @var string
     */
    protected $code = 'iyzico';

    /**
     * Returns payment method title.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Iyzico';
    }

    /**
     * Returns payment method description.
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Pay securely using Iyzico.';
    }

    /**
     * Check if payment method is available.
     *
     * @return bool
     */
    public function isAvailable()
    {
        return true;
    }

    /**
     * Validate payment method before order is placed.
     *
     * @return void
     */
    public function validate()
    {
        // You can add validation logic here if needed
    }

    /**
     * Get redirect url.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return '';
    }

    // Implement other required methods for payment processing here
}
