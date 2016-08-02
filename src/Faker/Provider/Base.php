<?php

namespace StockFaker\Provider;

use StockFaker\Country;
use StockFaker\Currency;
use StockFaker\Generator;

class Base extends Provider{

    /**
     * Stock name
     * 
     * @var
     */
    public $name;

    /**
     * Stock isin
     * 
     * @var
     */
    public $isin;

    /**
     * Stock country
     * 
     * @var
     */
    public $country;

    /**
     * Stock currency
     * 
     * @var
     */
    public $currency;
    
    /**
     * @var Generator
     */
    private $generator;

    
    public function __construct(Generator $generator)
    {
        parent::__construct();

        $this->generator = $generator;
    }

    /**
     * Get stock name
     *
     * @return mixed
     */
    public function name()
    {
        if($this->name) {

            return $this->name;
        }

        return $this->name = $this->faker->company;
    }

    /**
     * Get stock isin
     *
     * @return mixed
     */
    public function isin()
    {
        if($this->isin) {

            return $this->isin;
        }

        $country = $this->country();

        return $this->isin = strtoupper($country.$this->faker->bothify("#####??####"));
    }

    /**
     * Get stock country
     *
     * @return mixed
     */
    public function country()
    {
        if($this->country) {

            return $this->country;
        }

        $this->country = Country::random();

        $this->currency = Currency::get($this->country);

        return $this->country;
    }

    /**
     * Get stock currency
     *
     * @return mixed
     */
    public function currency()
    {
        if($this->currency) {

            return $this->currency;
        }

        $this->country();

        return $this->currency;
    }
    
}