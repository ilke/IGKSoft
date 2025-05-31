<?php

namespace Webkul\Payment\Http\Controllers;

use Illuminate\Http\Request;
use Webkul\Checkout\Cart;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Payment\Payment\Iyzico;
use Illuminate\Routing\Controller;

class IyzicoController extends Controller
{
    protected $cart;
    protected $orderRepository;
    protected $iyzico;

    public function __construct(Cart $cart, OrderRepository $orderRepository, Iyzico $iyzico)
    {
        $this->cart = $cart;
        $this->orderRepository = $orderRepository;
        $this->iyzico = $iyzico;
    }

    public function redirect(Request $request)
    {
        // Here you would prepare the payment request to Iyzico and redirect the user
        // For now, just return a placeholder view
        return view('payment::iyzico-redirect');
    }

    public function callback(Request $request)
    {
        // Handle Iyzico callback/response here
        // For now, just return a placeholder view
        return view('payment::iyzico-callback');
    }
}
