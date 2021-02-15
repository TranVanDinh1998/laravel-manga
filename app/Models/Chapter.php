<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'chapters';
    protected $fillable = [
        'name',
        'manga_id',
        'view',
        'created_at',
        'updated_at',
        'verified',
        'deleted_at',
    ];

    // relationship
    public function manga() {
        return $this->belongsTo(Manga::class);
    }
    public function details() {
        return $this->hasMany(Detail::class);
    }

    // scope
    public function scopeNotDeleted($q){
        return $q->whereNull('deleted_at');
    }
    public function scopeSoftDeleted($q){
        return $q->whereNotNull('deleted_at');
    }
    public function scopeBelongsToManga($q,$id) {
        return $q->whereManga_id('id');
    }

    /// get
    public function getAllChapters($id){
        return $this->belongsToManga($id)->withoutTrashed();
    }

    public function getAllTrashedChapters($id) {
        return $this->belongsToManga($id)->onlyTrashed();
    }

    public function findTrashed($id) {
        return $this->onlyTrashed()->find($id);
    }

}
