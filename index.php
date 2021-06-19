<?php
/**
 * User: hx
 * Date: 2021/6/19
 * Time: 21:49
 */

require_once "./vendor/autoload.php";

$Mail = new \Huangxiao\Mail();

echo $Mail->send();