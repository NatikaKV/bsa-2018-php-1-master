<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    private $currencies = array();
    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }
    public function maxPrice(): float
    {
        $maxPrice = 0;
        foreach ($this->currencies as $currency){
            $price = $currency->getDailyPrice();
            $maxPrice = ($price>$maxPrice) ? $price : $maxPrice;
        }
        return $maxPrice;
    }
    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}