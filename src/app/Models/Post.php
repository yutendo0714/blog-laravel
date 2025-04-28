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

    public static function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return self::orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
