<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {

        {
            $html = '';
            foreach ($market->getCurrencies() as $coin) {
                $html .= '<img src="' . $coin->getLogoUrl() . '"><br>';
                $html .= $coin->getName() . ': ';
                $html .= $coin->getDailyPrice() . '<br>';

            }
            return $html;
        }
    }
}