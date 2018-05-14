<?php

namespace Cryptocurrency\Task1;
class Bitcoin implements Currency
{
    private $price;

    function __construct($price)
    {
        $this->price = $price;
    }

    public function getName(): string
    {
        return 'Bitcoin';
    }

    public function getDailyPrice(): float
    {
        return $this->price;
    }

    public function getLogoUrl(): string
    {
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
    }
}