<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $primaryKey = 'id';
    public $timestamp = true;
}
