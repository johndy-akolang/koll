<?php
namespace App\Repositories;

use App\Models\Comment;

class CommentRepository extends Comment
{
    public function saveItemComment($data)
    {
        return parent::create($data);
    }
}
