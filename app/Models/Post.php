<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'category', 'reading_time', 'content', 'slug'];

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
}
