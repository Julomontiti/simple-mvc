<?php
/**
 * Created by PhpStorm.
 * User: wilder13
 * Date: 01/10/18
 * Time: 18:41
 */


use App\Wcs\Hello;
use HelloWorld\SayHello;

require '../vendor/autoload.php';


$julo = new Hello();

echo $julo->talk();

$juju = new SayHello();

echo $juju->world();
