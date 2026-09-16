<?php
namespace App\Repositories;
use App\Contracts\PostRepositoryInterface;
use App\Models\Post;
class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }
    public function find($id)
    {
        return Post::findOrFail($id);
    }
}