<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
        'verified',
        'deleted_at',
    ];

    // relationship
    public function mangaCategories() {
        return $this->hasMany(MangaCategory::class);
    }

    // scope
    public function scopeNotDeleted($q){
        return $q->whereNull('deleted_at');
    }
    public function scopeSoftDeleted($q){
        return $q->whereNotNull('deleted_at');
    }

    /// get
    public function getAllCategories(){
        return $this->withoutTrashed();
    }

    public function getAllTrashedCategories() {
        return $this->onlyTrashed();
    }

    
}
