<?php

namespace StockFaker;


class Country{

    protected static $countries = array(
        'US', 'DE', 'FR', 'EN', 'CH'
    );

    /**
     * Get random country
     *
     * @return float
     */
    public static function random()
    {
        return static::get();
    }

    /**
     * Get country
     *
     * @param null $country
     * @return float
     */
    public static function get($country = null)
    {
        if($country){
            
            if(!in_array($country, static::$countries)){

                throw new \InvalidArgumentException(sprintf('Unable to find country "%s""', $country));
            }

            return static::$countries[$country];
        }
        
        return static::$countries[array_rand(static::$countries)];
    }
    
}



