<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPages extends Model
{
    protected $fillable = [
    	'name',
    	'slug',
    	'type',
    	'image',
    	'content',
    ];
}
