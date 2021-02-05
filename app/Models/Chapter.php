<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $table = 'chapters';

    // relationship
    public function manga() {
        return $this->belongsTo(Manga::class);
    }
    public function details() {
        return $this->hasMany(Detail::class);
    }
}
