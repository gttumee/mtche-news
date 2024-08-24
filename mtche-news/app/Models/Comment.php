<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'article_id', 'content', 'name','commentable_type'
    ];
    

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function highlight()
    {
        return $this->belongsTo(Highlight::class);
    }
    
}