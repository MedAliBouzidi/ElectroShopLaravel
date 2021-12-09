<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "color",
        "desc",
        "category",
        "marque",
    ];

    public function refrigerateurs(): BelongsToMany
    {
        return $this->belongsToMany(Refrigerateur::class);
    }

    public function plaques(): BelongsToMany
    {
        return $this->belongsToMany(Plaque::class);
    }

    public function lavelinges(): BelongsToMany
    {
        return $this->belongsToMany(LaveLinge::class);
    }

    public function commands(): BelongsTo
    {
        return $this->belongsTo(Command::class);
    }
}
