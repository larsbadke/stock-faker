<?php
/**
 * Created by PhpStorm.
 * User: lars
 * Date: 04.08.16
 * Time: 13:08
 */


require 'vendor/autoload.php';

$stock = StockFaker\Factory::create();


for($i=0; $i<70; $i++){

    echo $stock->close.'<br>';

    $stock->next();
}
