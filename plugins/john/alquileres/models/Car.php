<?php namespace John\Alquileres\Models;

use Model;

/**
 * Model
 */
class Car extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'john_alquileres_car';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function scopeDisponibles($query)
    {
        return $query->where('disponible',1);
    }
}
