<?php
namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\PostsRepositoryInterface;
use App\Models\Post;

class PostsRepository implements PostsRepositoryInterface{
    protected $model;

    public function __construct(Post $model) {
        $this->model = $model;
    }

    public function get() {
        return $this->model->published()->get();
    }

    public function find(int $id) {
        return $this->model->published()->find($id);
    }
}
