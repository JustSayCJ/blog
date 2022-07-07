<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    use HasFactory;

//    protected $guarded = [];
    protected $fillable = ['title', 'slug', 'excerpt', 'body'];
}
