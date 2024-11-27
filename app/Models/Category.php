<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name_uz', 'name_en', 'slug', 'meta_title', 'meta_descritption', 'meta_keywords'];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
