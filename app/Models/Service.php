<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['subcategory_id', 'name', 'slug', 'description', 'image', 'duration_minutes', 'price_cents', 'sort_order', 'is_active'];

    protected $appends = ['formatted_duration', 'formatted_price'];

    protected function casts(): array
    {
        return [
            'duration_minutes' => 'integer',
            'price_cents' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    protected function formattedDuration(): Attribute
    {
        return Attribute::get(function (): string {
            $hours = intdiv($this->duration_minutes, 60);
            $minutes = $this->duration_minutes % 60;

            if ($hours === 0) {
                return "{$minutes} min";
            }

            return $minutes === 0 ? "{$hours}h" : "{$hours}h{$minutes}";
        });
    }

    protected function formattedPrice(): Attribute
    {
        return Attribute::get(fn (): string => 'R$'.number_format($this->price_cents / 100, 0, ',', '.'));
    }
}
