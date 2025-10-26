<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    
    // === RELATIONSHIPS ===

    /**
     * Get all posts that belong to this category.
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the parent category (if this is a sub-category).
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get all children categories.
     */
    publics function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    // multi lang relations
    /**
     * Get all translations of this category (e.g., get 'ar' and 'es' from 'en').
     */
    // public function translations(): HasMany
    // {
    //     // This finds all other categories that have their 'translation_of' set to this one's ID.
    //     return $this->hasMany(Category::class, 'translation_of');
    // }

    /**
     * Get the original category this is a translation of.
     */
    // public function original(): BelongsTo
    // {
    //     // This finds the category this one is a translation of.
    //     return $this->belongsTo(Category::class, 'translation_of');
    // }
}