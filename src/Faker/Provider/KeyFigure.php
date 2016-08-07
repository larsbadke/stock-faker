<?php

namespace StockFaker\Provider;

use StockFaker\Generator;

class KeyFigure extends Provider{

    /**
     * Stock variance
     *
     * @var
     */
    public $variance;

    /**
     * Stock mu
     *
     * @var
     */
    public $mu;

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
     * Variance
     */
    public function variance()
    {
        return $this->variance = $this->faker->randomFloat(2, 0, 10);
    }

    /**
     * Mu
     */
    public function mu()
    {
        return $this->mu = $this->faker->randomFloat(2, 0, 10);
    }


}