<?php

namespace Faker\Test;

use StockFaker\Generator;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function can_access_to_provider_functions()
    {
        $generator = new Generator;

        $generator->addProvider(new FooProvider());

        $this->assertEquals('foobar', $generator->fooFormatter());
    }

    /**
     * @test
     */
    public function can_access_to_provider_public_property()
    {
        $generator = new Generator;

        $generator->addProvider(new FooProvider());

        $this->assertEquals('bar', $generator->foo);
    }
    
    /**
     * @test
     */
    public function add_provider_gives_priority_to_newly_added_provider()
    {
        $generator = new Generator;

        $generator->addProvider(new FooProvider());

        $generator->addProvider(new BarProvider());

        $this->assertEquals('barfoo', $generator->fooFormatter());
    }

}


class FooProvider
{
    public $foo = 'bar';
    
    public function fooFormatter()
    {
        return 'foobar';
    }
    
    public function foo()
    {
        return $this->foo;
    }
   
}

class BarProvider
{
    public function fooFormatter()
    {
        return 'barfoo';
    }
}
