<?php

namespace App\Repositories\Posts;

use App\Repositories\Posts\PostRepositoryInterface;

class EloquentPostRepository implements PostRepositoryInterface
{
    protected $post;

    function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function find($id)
    {
        return $this->post->find($id);
    }
}