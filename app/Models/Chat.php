<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Chat
 * @package App\Models
 * @version October 29, 2018, 11:31 pm UTC
 *
 * @property integer user_id
 * @property string description
 */
class Chat extends Model
{
    use SoftDeletes;

    public $table = 'chats';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required'
    ];

    
}
