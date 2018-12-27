<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    protected $table = 'nutrition';
    protected $fillable = ['id', 'school_name', 'address', 'city', 'postal_code', 'school_board', 'school_id',
        'breakfast', 'lunch', 'snack', 'hidden'];
    public $timestamps = false;
}
