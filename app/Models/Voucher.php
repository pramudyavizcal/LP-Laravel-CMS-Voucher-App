<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'image_path',
        'meta_title',
        'meta_description',
        'is_best_seller',
        'is_promo',
    ];

    protected $casts = [
        'is_best_seller' => 'boolean',
        'is_promo' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function booted()
    {
        static::creating(function ($voucher) {
            if (empty($voucher->slug)) {
                $voucher->slug = Str::slug($voucher->name);
            }
        });

        static::updating(function ($voucher) {
            if ($voucher->isDirty('name') && !$voucher->isDirty('slug')) {
                $voucher->slug = Str::slug($voucher->name);
            }
        });
    }
}
