<?php

namespace App\Repositories;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Post;
class PostRepository implements PostRepositoryInterface {
    public function all($sort = null) {

        switch($sort) {
            case "ascending":
            case "asc":
            case "ASC":
                return Post::orderBy("created_at")->get();
            break;

            case "descending":
            case "desc":
            case "DESC":
                return Post::orderByDesc("created_at")->get();
            break;

        }

        return Post::all();
    }

    public function delete(Post $post) {
        return $post->delete();
    }
}
