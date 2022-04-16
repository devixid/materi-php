<?php 

class Invoice
{
    public ?string $number = null;
}

class Order
{
    public ?Invoice $invoice = null;
}

$order = new Order();

var_dump($order->invoice?->number);