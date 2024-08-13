<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id', 'title_mn', 'title_jp', 'writer','article','image','flag','japanese'

    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function highligthCategory()
    {
        return $this->belongsTo(HighlightCategory::class, 'category_id');
    }

}