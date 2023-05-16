<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    use HasFactory;
    public $fillable = ['name', 'place', 'description', 'latitude', 'longitude', 'img'];
}
