<?php

namespace App\Helpers;

trait MediaUploader
{
    function uploadImage($file, $fileName, $dirName, $disk = 'public')
    {
        if ($file) {

            $fileName = "$fileName." . $file->getClientOriginalExtension();
            $image = $file->storeAs($dirName, $fileName, $disk);
            return $image;
        }
        return null;    
    }
}
