<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MangaCategory extends Model
{
    use HasFactory;
    protected $table = 'manga_categories';

    // relationship
    public function manga() {
        return $this->belongsTo(Manga::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
