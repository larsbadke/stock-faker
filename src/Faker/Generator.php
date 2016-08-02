<?php

namespace StockFaker;



class Generator {

    protected $providers = array();

    public function addProvider($provider)
    {
        array_unshift($this->providers, $provider);
    }

    public function __get($property)
    {
        foreach ($this->providers as $provider){

            if(property_exists($provider, $property)){

                return $provider->$property();
            }
        }

        throw new \InvalidArgumentException(sprintf('Unable to find property "%s""', $property));
    }

    public function __call($method, $arguments)
    {
        foreach ($this->providers as $provider){

            if(method_exists($provider, $method)){

                return call_user_func_array(array($provider, $method), $arguments);
            }
        }

        throw new \InvalidArgumentException(sprintf('Unable to find method "%s""', $method));
    }
}