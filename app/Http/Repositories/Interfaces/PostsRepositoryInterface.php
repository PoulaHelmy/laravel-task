<?php

namespace App\Http\Repositories\Interfaces;

interface PostsRepositoryInterface
{
    public function get();

    public function find(int $id);

}//End OF Class
