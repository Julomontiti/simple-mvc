<?php
/**
 * Created by PhpStorm.
 * User: wilder13
 * Date: 01/10/18
 * Time: 18:41
 */
require __DIR__ . '/../vendor/autoload.php';

$index = new \Controller\ItemController();

echo $index->index();


