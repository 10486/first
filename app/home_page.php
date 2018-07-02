<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home_page extends Model
{
    protected $table = "home_page";
    protected $fillable = ['name','head','text','img'];
    public $timestamps = false;
}
