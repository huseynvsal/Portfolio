<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected  $table = 'tools';
    protected $fillable = ['project_id','tool'];
}
