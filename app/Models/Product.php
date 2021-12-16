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
            'name',
            'desc',
            'color',
            'price',
            'category',
            'marque',
            'image',
        ];

    public function commands(): BelongsTo
    {
        return $this->belongsTo(Command::class);
    }
}
