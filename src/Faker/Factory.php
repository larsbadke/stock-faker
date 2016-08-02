<?php

namespace StockFaker;

use Simulator\Simulator;

class Factory
{

    protected static $defaultProviders = array('Base', 'Quote');

    public static function create()
    {
        $generator = new Generator();

        $simulator = new Simulator();

        foreach (static::$defaultProviders as $provider) {

            $providerClassName = self::getProviderClassname($provider);

            $generator->addProvider(new $providerClassName($generator, $simulator));
        }

        return $generator;
    }

    protected static function getProviderClassname($provider)
    {
        $providerClass = 'StockFaker\\Provider\\' . $provider;

        if (class_exists($providerClass)) {

            return $providerClass;
        }

        throw new \InvalidArgumentException(sprintf('Unable to find provider "%s""', $provider));
    }
}