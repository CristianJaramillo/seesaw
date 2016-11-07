<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    /**
     * The table associated with the model.
     *
     * @access protected
     * @var string
     */
    protected $table = 'docs';

    /**
     * The attributes that are mass assignable.
     *
     * @access protected
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @access protected
     * @var array
     */
    protected $hidden = [
    ];
}
