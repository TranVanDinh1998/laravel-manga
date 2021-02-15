<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'details';
    public $timestamps = false;
    protected $fillable = [
        'chapter_id',
        'image',
        'verified',
        'deleted_at',
    ];
    // relationship
    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
