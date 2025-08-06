<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PackageService extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'products_package_services')
            ->withPivot('quantity');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
