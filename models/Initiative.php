<?php namespace Pensoft\Initiatives\Models;

use Model;


/**
 * Model
 */
class Initiative extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_initiatives_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => ['Pensoft\Initiatives\Models\Category']
    ];

    public $attachOne = [
        'logo' => 'System\Models\File',
    ];
}
