<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Auth\Access\Response;


class CommentPolicy
{
    // public function delete(User $user, Comment $comment)
    // {
    //     return $user->id === $comment->user()->user_id;
    // }

    public function modify(User $user, Comment $comment): Response
    {
        return $user->id === $comment->user_id ? Response::allow() : Response::deny("You do not own this post");
    }
}
