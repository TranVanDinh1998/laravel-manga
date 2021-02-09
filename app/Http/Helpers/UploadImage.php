<?php

namespace App\Http\Helpers;

use Illuminate\Support\Str;

class UploadImage
{
    public function upload($file, $path,$avatar)
    {
        return $file->storeAs($path, $avatar) ? true : false;
    }

    public function checkIfExists($file, $path)
    {
        return (file_exists($path . '/' . $file->getClientOriginalName())) ? true : false;
    }

    public function getAvatar($file, $path)
    {
        $avatar = $file->getClientOriginalName();
        while ($this->checkIfExists($file, $path)) {
            $avatar = Str::random(4) . '_' . $avatar;
        }
        return $avatar;
    }
}
