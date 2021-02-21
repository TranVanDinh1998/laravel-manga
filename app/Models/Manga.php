<?php

namespace App\Models;

use App\Http\Helpers\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manga extends Model
{
    use HasFactory;
    use SoftDeletes;
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
    public function mangaCategories()
    {
        return $this->hasMany(MangaCategory::class);
    }
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    // scope
    public function scopeNotDeleted($q)
    {
        return $q->whereNull('deleted_at');
    }
    public function scopeSoftDeleted($q)
    {
        return $q->whereNotNull('deleted_at');
    }

    /// get
    public function getAllMangas()
    {
        return $this->withoutTrashed();
    }

    public function getAllTrashedMangas()
    {
        return $this->onlyTrashed();
    }

    public function findTrashed($id)
    {
        return $this->onlyTrashed()->find($id);
    }

    public function uploadImage($image, $uploadImage)
    {
        $destination_path = 'public/images/mangas';
        $avatar = $uploadImage->getAvatar($image, $destination_path);
        if ($uploadImage->upload($image, $destination_path, $avatar))
            return $avatar;
        else
            return null;
    }

    public function removeImage($image, $removeImage)
    {
        $destination_path = 'public/images/mangas';
        if ($removeImage->remove($destination_path, $image))
            return true;
        else
            return false;
    }
}
