<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyCar extends Model
{
    // use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['car_id', 'user_id'];
}
