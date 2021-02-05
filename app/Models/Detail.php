<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'details';

    // relationship
    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
