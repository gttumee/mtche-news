<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id', 
        'title_mn', 
        'title_jp', 
        'writer',
        'article',
        'image',
        'flag',
        'japanese',
        'contact'
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }
}