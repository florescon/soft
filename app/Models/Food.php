<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'category_id',
    ];

    /**
     * Get the line associated with the Product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function getCreatedAtForHumansAttribute()
    {
        return $this->created_at->format("d, m, y");
    }
}
