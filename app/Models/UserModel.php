<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $timestamps = false;
    protected $table = "crud";
    protected $fillable = ['name','password','email']; //things i could change
    protected $guarded = [];
}
