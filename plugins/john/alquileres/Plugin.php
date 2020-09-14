<?php namespace John\Alquileres;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'John\Alquileres\Components\Cars' => 'cars',
            'John\Alquileres\Components\DetailsCar' => 'car'
        ];
    }

    public function registerSettings()
    {
    }
}
