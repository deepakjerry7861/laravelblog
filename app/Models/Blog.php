<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'blogtitle',
        'slug',
        'category',
        'featuredimage',
        'description',
    ];
}
