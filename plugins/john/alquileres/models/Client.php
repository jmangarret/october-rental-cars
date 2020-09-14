<?php namespace John\Alquileres\Models;

use Model;

/**
 * Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'john_alquileres_client';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'document' => 'required:numeric',
        'email' => 'email:rfc,dns'
    ];

    public $messages = [
            '*.required'        => 'Este campo es requerido.',
            '*.numeric'         => 'Este campo debe ser numérico',
            '*.email'           => 'Ingrese email valido',
    ];
    

    public $hasMany = [
        'services' => 'John\Alquileres\Models\Service'
    ];
}
