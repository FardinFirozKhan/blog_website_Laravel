<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $table='blogs';
    protected $primaryKey='blog_id';

    protected $fillable = [
        'title',
        'description',
        'blog',
        'img',
        'user_id',
    ];

    /**
     * Get all of the comments for the Blogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Get the user that owns the Blogs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

