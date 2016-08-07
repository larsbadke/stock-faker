<?php

namespace Faker\Test\Provider;

use Simulator\Simulator;
use StockFaker\Generator;
use StockFaker\Provider\Quote;

class QuoteTest extends \PHPUnit_Framework_TestCase
{
    private $faker;
    
    private $simulator;

    public function setUp()
    {
        $faker = new Generator();
        
        $simulator = new Simulator();

        $faker->addProvider(new Quote($faker, $simulator));

        $this->faker = $faker;

        $this->simulator = $simulator;
    }

    /**
     * @test
     */
    public function drift()
    {
        $this->faker->drift(0.5);
        
        $this->assertEquals(0.5, $this->simulator->drift);
    }
    
    
}