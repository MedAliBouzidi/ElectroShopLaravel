<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plaque extends Model
{
    use HasFactory;

    protected $fillable = [
        "height",
        "foyer_type",
        "foyer_nbr",
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

}
