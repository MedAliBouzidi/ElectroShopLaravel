<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Refrigerateur extends Model
{
    use HasFactory;

    protected $fillable = [
        "height",
        "width",
        "energetic_class",
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

}
