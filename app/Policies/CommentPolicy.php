<?php

namespace App\Policies;

use Laravelista\Comments\Comment;

class CommentPolicy
{
    public function create(User $user): bool
    {
        return true;
    }

    public function delete(User $user, Comment $comment): bool
    {
        return $user->id == $comment->commenter_id || $user->isAdminComments();
    }

    public function update(User $user, Comment $comment): bool
    {
        return $user->id == $comment->commenter_id || $user->isAdminComments();
    }

    public function reply(User $user, Comment $comment): bool
    {
        return $user->id != $comment->commenter_id;
    }
} 
