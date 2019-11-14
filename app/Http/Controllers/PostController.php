<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Repositories\PostRepository;
use App\Repositories\TeamRepository;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $postRepo;
    private $teamRepo;
    public function __construct(PostRepository $postRepo,TeamRepository $teamRepo)
    {
        $this->postRepo = $postRepo;
        $this->teamRepo = $teamRepo;
    }
    public function index()
    {
        return Post::all();
    }


    public function feed() {
        return view('feed')->with(['posts'=>$this->postRepo->all("desc")]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = auth()->user();

        if($request->teams) {
            $this->teamRepo->bulkInsert($request->teams);
        }
        return Post::create([
            "title"=>$request->title,
            "content"=>$request->content,
            "user_id"=>auth()->user()->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->postRepo->update($post,$request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->postRepo->delete($post);
    }
}
