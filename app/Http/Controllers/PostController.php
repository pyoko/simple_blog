<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\{Request, JsonResponse};
use App\Http\Requests\PostRequest;
use App\Http\Repositories\PostRepository;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    const PAGINATION_PER_PAGE = 5;

    // ------------------------------------------------------------------------

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PostResource::collection(Post::orderBy('created_at', 'desc')->paginate(self::PAGINATION_PER_PAGE));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PostRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PostRequest $request): JsonResponse
    {
        $postRepo = new PostRepository;
        
        return response()->json([
            'created' => true,
            'post_id' => $postRepo->createUpdatePost([
                'author' => $request->get('author'),
                'title'  => $request->get('title'),
                'body'   => $request->get('body'),
                'image'  => $request->get('image'),
                'tags'   => $request->get('tags'),
            ], new Post)->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PostRequest  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PostRequest $request, Post $post): JsonResponse
    {
        $postRepo = new PostRepository;
        
        return response()->json([
            'updated' => true,
            'post_id' => $postRepo->createUpdatePost([
                'author' => $request->get('author'),
                'title'  => $request->get('title'),
                'body'   => $request->get('body'),
                'image'  => $request->get('image'),
                'tags'   => $request->get('tags'),
            ], $post)->id
        ]);
    }
}
