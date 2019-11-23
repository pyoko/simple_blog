<?php

namespace App\Http\Repositories;

use App\{Post, Author};

class PostRepository
{
    public function createUpdatePost($postData, $postModel): Post
    {
        $author = Author::where(['id' => $postData['author']])->firstOrFail();

        $postModel->title = $postData['title'];
        $postModel->body  = $postData['body'];
        $postModel->image = $postData['image'];
        $postModel->save();

        // ------------------------------------------------------------------------

        $postModel->author()->associate($author);
        $postModel->tags()->attach($postData['tags']);

        $postModel->save();

        return $postModel;
    }
}