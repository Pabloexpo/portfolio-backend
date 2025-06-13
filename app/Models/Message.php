<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['nombre','email','body','answered'];
    protected $casts = ['answered' => 'boolean'];
}
