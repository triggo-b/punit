<?php
namespace Weather\test;
use Weather\Client as Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function testPressure()
    {
        $my = new Client();
        $currentCity = $my->getWeatherByCity('Москва');var_dump($currentCity); die;
        $this->assertEquals(1003, $currentCity->getPressure());
    }
}