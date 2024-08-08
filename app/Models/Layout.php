<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;


    // Specify the fields that are mass assignable
    protected $fillable = ['post_id', 'div_id'];


    /**
     * Get the Posts that owns the Layout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {

        
        return $this->belongsTo(Post::class);
    }
}
