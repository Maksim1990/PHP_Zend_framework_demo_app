<?php

namespace Portal\Service\Factory;

use Portal\Service\CurrencyConverter;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

class CurrencyConverterFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container,
                             $requestedName, array $options = null)
    {
        // Create an instance of the class.
        $service = new CurrencyConverter();

        return $service;
    }
}