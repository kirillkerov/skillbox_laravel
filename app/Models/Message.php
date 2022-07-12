<?php

namespace App\Models;

class Message extends Model
{
    public static function getOrderedDesc()
    {
        return self::orderBy('created_at', 'DESC')->get();
    }
}
