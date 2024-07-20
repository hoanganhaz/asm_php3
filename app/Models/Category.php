<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
         'name',
         'cover',
         'is_active',
    ];
    protected $cast=[
         'is_active'=>'boolean',
    ];
}
