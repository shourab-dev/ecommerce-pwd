<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

trait MediaUploader
{
    function uploadImage($file, $fileName, $dirName, $old = null, $disk = 'public')
    {

        if ($file) {
            if ($old) {
                Storage::disk($disk)->delete($old);
            }

            $fileName = "$fileName." . $file->getClientOriginalExtension();
            $image = $file->storeAs($dirName, $fileName, $disk);
            return $image;
        }
        return null;
    }
}
