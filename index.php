<?php
/**
 * Created by PhpStorm.
 * User: borja
 * Date: 19/07/2017
 * Time: 23:08
 */

// Lo mismo que error_reporting(E_ALL);
error_reporting(-1);
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use App\Model\Demo;

try {

    echo "hi";



    $test = new Demo();
    $test->test();

}catch(Exception $e){
    var_dump($e);
}




