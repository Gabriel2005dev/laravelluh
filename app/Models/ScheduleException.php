<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleException extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'opens_at', 'closes_at', 'break_starts_at', 'break_ends_at', 'slot_interval_minutes', 'buffer_minutes', 'is_open', 'reason'];

    protected function casts(): array
    {
        return ['date' => 'date', 'is_open' => 'boolean', 'slot_interval_minutes' => 'integer', 'buffer_minutes' => 'integer'];
    }
}
