<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\{Request, JsonResponse};
use App\Http\Requests\AuthorRequest;
use App\Http\Repositories\AuthorRepository;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AuthorResource(Author::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AuthorRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AuthorRequest $request): JsonResponse
    {
        $authorRepo = new AuthorRepository;
        
        return response()->json([
            'created'   => true,
            'author_id' => $authorRepo->createUpdateAuthor([
                'name'     => $request->get('name'),
                'role'     => $request->get('role'),
                'avatar'   => $request->get('avatar'),
                'location' => $request->get('location'),
            ], new Author)->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     */
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AuthorRequest  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AuthorRequest $request, Author $author): JsonResponse
    {
        $authorRepo = new AuthorRepository;
        
        return response()->json([
            'updated'   => true,
            'author_id' => $authorRepo->createUpdateAuthor([
                'name'     => $request->get('name'),
                'role'     => $request->get('role'),
                'avatar'   => $request->get('avatar'),
                'location' => $request->get('location'),
            ], $author)->id
        ]);
    }
}
