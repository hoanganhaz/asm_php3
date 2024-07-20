<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_id',
        'name',
        'slug',
        'sub_title',
        'imgage',
        'content',
        'is_active',
        'is_hot_post',
        'is_news',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
