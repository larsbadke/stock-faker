<?php

namespace Faker\Test\Provider;

use StockFaker\Generator;
use StockFaker\Provider\Base;

class BaseTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();

        $faker->addProvider(new Base($faker));

        $this->faker = $faker;
    }

    /**
     * @test
     */
    public function name()
    {
        $name = $this->faker->name();
        
        $this->assertInternalType('string', $name);
        
    }

    /**
     * @test
     */
    public function isin()
    {
        $isin = $this->faker->isin();

        $this->assertInternalType('string', $isin);

    }

    /**
     * @test
     */
    public function country()
    {
        $country = $this->faker->country();

        $this->assertInternalType('string', $country);
        
        $this->assertEquals(2, strlen($country));
    }

    /**
     * @test
     */
    public function currency()
    {
        $currency = $this->faker->currency();

        $this->assertInternalType('string', $currency);

        $this->assertEquals(3, strlen($currency));
    }
    
}