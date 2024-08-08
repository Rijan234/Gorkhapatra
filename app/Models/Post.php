<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The category that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    /**
     * Get the layouts associated with the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function layouts()
    {
        return $this->hasOne(Layout::class);
    }
}
