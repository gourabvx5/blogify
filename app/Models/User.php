<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['first_name', 'last_name', 'blog_name', 'phone', 'email', 'password', 'otp'];
    protected $attributes = [
        'otp' => '0'
    ];
}
