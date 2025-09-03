<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    public function creating(Post $post): void
    {
        $post->slug = Str::slug($post->titulo);
    }

    public function updating(Post $post): void
    {
        $post->slug = Str::slug($post->titulo);
    }
}
