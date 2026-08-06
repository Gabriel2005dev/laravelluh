<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessHour extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['weekday', 'opens_at', 'closes_at', 'break_starts_at', 'break_ends_at', 'slot_interval_minutes', 'buffer_minutes', 'is_open'];

    protected function casts(): array
    {
        return ['is_open' => 'boolean', 'slot_interval_minutes' => 'integer', 'buffer_minutes' => 'integer'];
    }
}