<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'numero', 'adress', 'category_id', 
    'description', 'content', 'image', 'posted'];

    public function category() {
         return $this->belongsTo(Category::class);
    }

}
