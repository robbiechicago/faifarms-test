<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    /** 
     * Author has many posts
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}