<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribes extends Model
{
    use HasFactory;
    protected $table ='subscribes';
    protected $fillable =[
        'username',
        'email',
        'subscribe_subject',
        'text',
    ];
}
