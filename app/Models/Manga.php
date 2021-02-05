<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $table = 'mangas';

    // relationship
    public function mangaCategories() {
        return $this->hasMany(MangaCategory::class);
    }
    public function chapters() {
        return $this->hasMany(Chapter::class);
    }
}
