<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppings extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name', 'Create_Date',
    ];
}
