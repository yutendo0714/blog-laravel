<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function getByLimit(int $limit_count = 10)
    {
        return self::orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
}
