<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title_uz', 'title_en', 'body_uz', 'body_en', 'image', 'slug', 'view', 'meta_title', 'meta_descritption', 'meta_keywords'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
