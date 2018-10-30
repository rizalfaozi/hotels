<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Room
 * @package App\Models
 * @version October 29, 2018, 9:52 am UTC
 *
 * @property integer provinces_id
 * @property string name
 * @property string price
 * @property string type
 * @property string description
 * @property integer status
 */
class Room extends Model
{
    //use SoftDeletes;

    public $table = 'rooms';
    

    //protected $dates = ['deleted_at'];


    public $fillable = [
        'provinces_id',
        'user_id',
        'name',
        'price',
        'count',
        'type',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'provinces_id' => 'integer',
        'name' => 'string',
        'price' => 'string',
        'type' => 'string',
        'description' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'provinces_id' => 'required',
        'name' => 'required',
        'price' => 'required',
        'type' => 'required',
        'status' => 'required'
    ];

    
}
