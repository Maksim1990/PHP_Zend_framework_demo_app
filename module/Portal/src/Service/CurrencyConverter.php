<?php

namespace Portal\Service;


class CurrencyConverter
{
    // Converts euros to US dollars.
    public function convertEURtoUSD($amount)
    {
        return $amount*1.25;
    }
}