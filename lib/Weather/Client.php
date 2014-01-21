<?php
namespace Weather;
use Weather\Response as Response;

class Client
{
    const URL = 'http://api.openweathermap.org/data/2.5/weather?q=';

    public function getWeatherByCity ($city = false)
    {
        $url = self::URL . $city . ',ru';
        $data = file_get_contents($url);

        return new Response($data);
    }
}