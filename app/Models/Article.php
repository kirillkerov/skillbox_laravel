<?php

namespace App\Models;

class Article extends Model
{
    public static function getPublished()
    {
        return self::whereIsPublished(1)->orderBy('created_at', 'DESC')->get();
    }
}
