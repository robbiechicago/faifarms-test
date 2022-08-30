<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * Tag has and belongs to many posts
     * (assumes a post_tag pivot table exists, with post_id and tag_id columns)
     */
    public function posts()
    {
        $this->belongsToMany(Post::class);
    }

}