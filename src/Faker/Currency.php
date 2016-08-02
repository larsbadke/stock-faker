<?php

namespace StockFaker;


class Currency{

    /**
     * Currencies
     * 
     * @var array
     */
    protected static $currencies = array(
        'US' => 'usd',
        'DE' => 'eur',
        'FR' => 'eur',
        'CH' => 'chf',
        'EN' => 'gbp',
    );

    /**
     * Symbols
     * 
     * @var array
     */
    protected static $symbols = array(
        'usd' => '$',
        'eur' => '€',
        'CH' => 'CHF',
        'gbp' => '₤',
    );

    /**
     * Get random currency
     *
     * @return float
     */
    public static function random()
    {
        return static::get();
    }

    /**
     * Get currency
     *
     * @param null $country
     * @return float
     */
    public static function get($country = null)
    {
        if($country){

            if(!array_key_exists($country, static::$currencies)){
                
                throw new \InvalidArgumentException(sprintf('Unable to find currency "%s""', $country));
            }

            return static::$currencies[$country];
        }
        
        return static::$currencies[Country::random()];
    }
    
}



