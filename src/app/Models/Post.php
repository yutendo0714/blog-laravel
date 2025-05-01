<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'body'];

    public function getByLimit(int $limit_count = 10)
    {
        return self::orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return self::orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function createPost($data)
    {
        // dd($data);
        $post = new Post();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return $post;
    }

    public function deletePost(int $id)
    {
        $post = Post::find($id);
        $post->delete();
        return $post;
    }
}
