<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
       protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|string',
        'type' => 'required|integer',
        'job' => 'required|integer',
        'rarity' => 'required|integer',
        'attribute' => 'required|integer',
        'detail' => 'required|string',
    );
}
