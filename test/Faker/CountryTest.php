<?php

namespace Faker\Test;


use StockFaker\Country;

class CountryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function static_method_random_provides_a_random_country_code()
    {
        $countryCode = Country::random();

        $this->assertEquals(2, strlen($countryCode));
    }


    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function throw_exception_if_wrong_country_code_is_submitted()
    {
        $countryCode = Country::get('ZZ');
    }


}