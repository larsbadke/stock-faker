<?php

namespace Faker\Test;


use StockFaker\Currency;

class CurrencyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function static_method_random_provides_a_random_currency()
    {
        $countryCode = Currency::random();

        $this->assertEquals(3, strlen($countryCode));
    }


    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function throw_exception_if_wrong_currency_is_submitted()
    {
        $currency = Currency::get('ZZ');
    }


}