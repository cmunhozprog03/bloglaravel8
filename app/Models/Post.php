<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relacion um para muitos inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relaçõa muitos para muitos
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Relação um a um poliformica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
