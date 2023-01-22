<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour24Weather extends Model
{
    use HasFactory;
    protected $table = 'hour24_weather';
    protected $guarded = [];
}
