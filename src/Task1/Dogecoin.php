<?php

namespace Cryptocurrency\Task1;
class Dogecoin implements Currency
{
    private $price;

    function __construct($price)
    {
        $this->price = $price;
    }

    public function getName(): string
    {
        return 'Dogecoin';
    }

    public function getDailyPrice(): float
    {
        return $this->price;
    }

    public function getLogoUrl(): string
    {
        return 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
    }
}