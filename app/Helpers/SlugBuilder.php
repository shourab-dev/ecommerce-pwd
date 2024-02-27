<?php

namespace App\Helpers;

trait SlugBuilder
{
    public function createSlug($model, $title, $slug = null)
    {
        if ($slug) {
            return $slug;
        } else {
            $newSlug = str()->slug($title);
            $count = $model::where('slug', $newSlug)->count();
            if ($count > 0) {
                $count++;
                $newSlug .= "-" . $count;
            }
            return $newSlug;
        }
    }
}
