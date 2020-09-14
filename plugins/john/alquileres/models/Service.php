<?php namespace John\Alquileres\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'john_alquileres_service';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'car' => 'John\Alquileres\Models\Car',
        'client' => 'John\Alquileres\Models\Client'
    ];
}
