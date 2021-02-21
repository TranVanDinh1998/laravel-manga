<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MangaCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'category_id',
        'manga_id',
        'verified',
        'deleted_at',
    ];
    protected $table = 'manga_categories';
    public $timestamps = false;


    // relationship
    public function manga() {
        return $this->belongsTo(Manga::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
