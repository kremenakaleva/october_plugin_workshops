<?php namespace Pensoft\Workshops\Models;

use Model;

/**
 * Model
 */
class Workshop extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_workshops_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
