<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinUser extends Model
{
    protected $fillable = ['name',
    'email',
    'phone',
    'interest'];
}
