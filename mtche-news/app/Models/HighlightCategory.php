<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighlightCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name','japanese','flag',

    ];
    

    public function highlight()
    {
        return $this->hasMany(Highlight::class, 'category_id');
    }
}