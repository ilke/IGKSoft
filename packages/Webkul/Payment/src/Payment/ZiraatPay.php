<?php

namespace Webkul\Payment\Payment;

class ZiraatPay extends Payment
{
    protected $code = 'ziraatpay';

    public function getTitle()
    {
        return 'Ziraat Bankası Kredi Kartı';
    }

    public function getDescription()
    {
        return 'Ziraat Bankası ile güvenli ödeme';
    }

    public function isAvailable()
    {
        return true;
    }

    public function validate()
    {
        // Kart bilgisi ve zorunlu alan kontrolleri
    }

    public function processPayment($order, $data)
    {
        // ZiraatPay API'ye ödeme isteği gönder
        // $data içinde kart bilgileri ve sipariş detayları olmalı
        // API dökümantasyonuna göre doldurun
    }

    public function getRedirectUrl()
    {
        return '';
    }
}
