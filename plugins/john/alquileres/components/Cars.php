<?php namespace John\Alquileres\Components;

use Cms\Classes\ComponentBase;
use John\Alquileres\Models\Car;

class Cars extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Car Component',
            'description' => 'Listado de vehiculos en alquiler'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->cars = $this->loadCars();
    }

    protected function loadCars(){
        return Car::disponibles()->get();
    }

    public $cars;
}