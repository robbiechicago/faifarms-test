<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /** 
     * Post belongs to Author)
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * Post has and belongs to many tags
     * (assumes a post_tag pivot table exists, with post_id and tag_id columns)
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}