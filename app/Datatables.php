<?php

namespace App;


use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Datatables extends Model
{
    use SoftDeletes;

    public $table = 'datatables';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'name',
    	'phone',
    	'company',
    	'zip',
    	'city',
    	'date',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
		'name' => 'string',
        'phone' => 'string',
        'company' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:100',
        'phone' => 'required|max:100',
        'company' => 'required|max:100',
        'zip' => 'required|max:50',
        'city' => 'required|max:50',
        'date' => 'required|date',
    ];
}

