<?php

namespace Faker\Test\Provider;

use Simulator\Simulator;
use StockFaker\Generator;
use StockFaker\Provider\KeyFigure;

class KeyFigureTest extends \PHPUnit_Framework_TestCase
{
    private $faker;
    
    private $simulator;

    public function setUp()
    {
        $faker = new Generator();
        
        $simulator = new Simulator();

        $faker->addProvider(new KeyFigure($faker, $simulator));

        $this->faker = $faker;

        $this->simulator = $simulator;
    }

    /**
     * @test
     */
    public function access_to_stock_variance_value()
    {
        $this->assertTrue(is_numeric($this->faker->variance));
    }

    /**
     * @test
     */
    public function access_to_stock_mu_value()
    {
        $this->assertTrue(is_numeric($this->faker->mu));
    }
}