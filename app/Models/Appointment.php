<?php

namespace App\Models;

use App\Enums\AppointmentStatus;
use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'service_id', 'starts_at', 'ends_at', 'status', 'payment_method', 'payment_status',
        'customer_name', 'customer_phone', 'customer_email', 'service_snapshot_name',
        'service_snapshot_duration_minutes', 'service_snapshot_price_cents', 'service_snapshot_category_name',
        'service_snapshot_subcategory_name',
    ];

    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'status' => AppointmentStatus::class,
            'payment_method' => PaymentMethod::class,
            'payment_status' => PaymentStatus::class,
            'service_snapshot_duration_minutes' => 'integer',
            'service_snapshot_price_cents' => 'integer',
        ];
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
