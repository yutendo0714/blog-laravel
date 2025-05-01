<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getPaginateByLimit(int $id, int $limit = 10)
    {
        // dd(gettype($this));
        // $categories = new Category();
        $category = $this->find($id);
        // dd(gettype(Category::all()));
        $posts = $category->posts()->orderBy('updated_at', 'DESC')->paginate($limit);
        // dd($posts);
        return $posts;
    }
}
