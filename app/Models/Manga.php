<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $table = 'mangas';
    protected $fillable = [
        'name',
        'alter_name',
        'image',
        'description',
        'author',
        'like',
        'follow',
        'view',
        'status',
        'created_at',
        'updated_at',
        'verified',
        'deleted_at',
    ];

    // relationship
    public function mangaCategories() {
        return $this->hasMany(MangaCategory::class);
    }
    public function chapters() {
        return $this->hasMany(Chapter::class);
    }

    // scope
    public function scopeNotDelete($q){
        return $q->whereNull('deleted_at');
    }
    public function scopeDelete($q){
        return $q->whereNotNull('deleted_at');
    }
    public function scopeActive($q) {
        return $q->whereVerified(1)->whereNull('deleted_at');
    }
    public function scopeDeactive($q){
        return $q->whereVerified(0)->whereNull('deleted_at');
    }


    // get
    public function getNotDeleteMangas() {
        return $this->notDelete()->get();
    }
    // public function getActiveMangas(){
    //     return $this->active()->get();
    // }
    // public function getDeactiveMangas() {
    //     return $this->deactive()->get();
    // }
    
}
