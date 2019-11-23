<?php

namespace App\Http\Repositories;

use App\Author;

class AuthorRepository
{
    public function createUpdateAuthor($authorData, $authorModel): Author
    {
        $authorModel->name     = $authorData['name'];
        $authorModel->role     = $authorData['role'];
        $authorModel->avatar   = $authorData['avatar'];
        $authorModel->location = $authorData['location'];

        $authorModel->save();

        return $authorModel;
    }
}