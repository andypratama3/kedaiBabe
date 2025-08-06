<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
        'slug',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function packageServices(): BelongsToMany
    {
        return $this->belongsToMany(PackageService::class, 'products_package_services')
            ->withPivot('quantity');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
