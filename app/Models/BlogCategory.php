<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['blog_category_name','blog_category_slug'];
    
    public function posts()
{
    return $this->hasMany(BlogPost::class, 'category_id');
}

}

