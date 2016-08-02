<?php

namespace StockFaker\Provider;

use Simulator\Simulator;
use StockFaker\Generator;

class Quote extends Provider{

    
    /**
     * Close price
     *
     * @var
     */
    public $close;

    /**
     * Open price
     *
     * @var
     */
    public $open;

    /**
     * Low price
     *
     * @var
     */
    public $low;

    /**
     * High price
     *
     * @var
     */
    public $high;
    
    /**
     * @var Generator
     */
    private $generator;

    /**
     * @var Simulator
     */
    private $simulator;


    public function __construct(Generator $generator, Simulator $simulator)
    {
        parent::__construct();

        $this->generator = $generator;

        $this->simulator = $simulator;
        
        $this->simulator->run();
    }

    /**
     * Run next simulation
     * 
     * @return array
     */
    public function next()
    {
        return $this->simulator->run();
    }

    /**
     * Set drift
     *
     * @param $mu
     */
    public function drift($mu)
    {
        $this->simulator->drift($mu);
    }

    /**
     * Set Volatility
     *
     * @param $deviation
     */
    public function volatility($deviation)
    {
        $this->simulator->volatility($deviation);
    }
    
    /**
     * Get open price
     * 
     * @return mixed
     */
    public function open()
    {
        return $this->open = $this->simulator->open;
    }
    
    /**
     * Get low price
     *
     * @return mixed
     */
    public function low()
    {
        return $this->low = $this->simulator->low;
    }
    
    /**
     * Get high price
     *
     * @return mixed
     */
    public function high()
    {
        return $this->high = $this->simulator->high;
    }
    
    /**
     * Get close price
     *
     * @return mixed
     */
    public function close()
    {
        return $this->close = $this->simulator->close;
    }

    

}