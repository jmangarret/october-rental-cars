<?php namespace John\Alquileres\Components;

use Cms\Classes\ComponentBase;
use Lang;
use John\Alquileres\Models\Car;

class DetailsCar extends ComponentBase
{
    /**
     * Identifier value to load the record from the database.
     * @var string
     */
    public $identifierValue;
    public $car;

    public function componentDetails()
    {
        return [
            'name'        => 'DetailCar Component',
            'description' => 'Detalle de vehiculo'
        ];
    }

    public function defineProperties()
    {
        return [
            'identifierValue' => [
                'title'       => 'rainlab.builder::lang.components.details_identifier_value',
                'description' => 'rainlab.builder::lang.components.details_identifier_value_description',
                'type'        => 'string',
                'default'     => '{{ :id }}',
                'validation'  => [
                    'required' => [
                        'message' => Lang::get('rainlab.builder::lang.components.details_identifier_value_required')
                    ]
                ]
            ],
        ];
    }

    public function onRun(){

        $this->prepareVars();
        $this->car = $this->loadRecord();
    }
    protected function prepareVars()
    {
        $this->identifierValue = $this->page['identifierValue'] = $this->property('identifierValue');
    }

    protected function loadRecord()
    {
        return Car::where('id', '=', $this->identifierValue)->first();
    }

    
}