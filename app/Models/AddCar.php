<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCar extends Model
{
    protected $fillable = ['carname', 'img', 'model', 'dsc'];
}
