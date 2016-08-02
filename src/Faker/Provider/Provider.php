<?php

namespace StockFaker\Provider;

use Faker\Factory;

class Provider{

    /**
     * Rounds value of stock data to specified precision
     *
     * @var int
     */
    public $round = 2;

    /**
     * Faker instance
     * 
     * @var \Faker\Generator
     */
    protected $faker;

    
    public function __construct()
    {
        $this->faker = Factory::create();
    }
    
    /**
     * Set round precision
     *
     * @param $round
     */
    public function setRound($round)
    {
        $this->round = $round;
    }

}