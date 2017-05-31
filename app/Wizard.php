<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wizard extends Model
{
    use SoftDeletes;

    public $table = 'wizards';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'email',
    	'fname',
    	'lname',
    	'country',
    	'city',
    	'postal',
    	'wphone',
    	'hphone',
    	'etc',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
		'email' => 'string',
        'fname' => 'string',
        'lname' => 'string',
        'country' => 'string',
        'city' => 'string',
        'postal' => 'string',
        'wphone' => 'string',
        'hphone' => 'string',
        'etc' => 'string',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|max:100',
        'fname' => 'required|max:100',
        'lname' => 'required|max:100',
        'country' => 'required|max:50',
        'city' => 'required|max:50',
        'postal' => 'required|max:50',
        'wphone' => 'required|max:20',
        'hphone' => 'required|max:20',
        'etc' => 'required|max:100',
    ];

}
