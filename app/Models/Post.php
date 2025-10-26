<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str; // Import the Str class

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'excerpt',
        'featured_image',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
        'canonical_url',
        'meta_robots',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Boot the model to automatically create/update the slug.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = static::createUniqueSlug($post->title);
        });

        static::updating(function ($post) {
            // Only update slug if the title has changed
            if ($post->isDirty('title')) {
                $post->slug = static::createUniqueSlug($post->title, $post->id);
            }
        });
    }

    /**
     * Helper function to create a unique slug.
     */
    private static function createUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title, '-');
        $originalSlug = $slug;
        $count = 1;

        $query = static::where('slug', $slug);
        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }

        while ($query->exists()) {
            $slug = "{$originalSlug}-" . $count++;
            $query = static::where('slug', $slug); // Re-init query for the new slug
            if ($excludeId) {
                $query->where('id', '!=', $excludeId);
            }
        }

        return $slug;
    }

    // === RELATIONSHIPS ===


    /**
     * Get the category that the post belongs to.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class); // Assumes you have a Category model
    }

    /**
     * Get the comments for the blog post.
     */

    // toDo: next phase
    // public function comments(): HasMany
    // {
    //     return $this->hasMany(Comment::class); // Assumes you have a Comment model
    // }

    /**
     * Get the post's short description (excerpt) for display.
     *
     * @return string
     */
    public function getExcerptPreviewAttribute(): string
    {
        // If a manual excerpt exists, use it.
        if ($this->excerpt) {
            return $this->excerpt;
        }

        // Otherwise, create one from the main content.
        // This strips HTML tags and limits it to 150 characters.
        return Str::limit(strip_tags($this->content), 150);
    }
}