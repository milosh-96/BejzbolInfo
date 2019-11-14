<?php
namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Post;
interface PostRepositoryInterface {
    public function all();
    public function delete(Post $post);
    public function update(Post $post,Request $request);
}
