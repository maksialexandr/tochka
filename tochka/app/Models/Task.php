<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = ['id', 'title', 'author', 'status', 'description'];
    public $timestamps = false;
    protected $table = 'tasks';
    protected $dates = ['date'];

}