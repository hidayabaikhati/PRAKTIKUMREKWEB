<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * Siapa pun user yang login boleh membuat post
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Hanya pemilik post yang boleh mengedit
     */
    public function update(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }

    /**
     * Hanya pemilik post yang boleh menghapus
     */
    public function delete(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
