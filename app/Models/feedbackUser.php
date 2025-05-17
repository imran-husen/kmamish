<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feedbackUser extends Model
{
    protected $fillable = ['name',
     'phone',
     'message'];

}
