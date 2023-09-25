<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table ='students';
    protected $fillable =[
        'name',
        'price',
        'description',
        'category',
        'profile_image',
        'discount',
        'youtube',
        'discount-price',
        'image',
        'main_product',
    ];
}
