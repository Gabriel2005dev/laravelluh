<?php

namespace Database\Seeders;

use App\Models\BusinessHour;
use Illuminate\Database\Seeder;

class BusinessHourSeeder extends Seeder
{
    public function run(): void
    {
        BusinessHour::truncate();

        $hours = [
            [
                'weekday' => 0,
                'opens_at' => null,
                'closes_at' => null,
                'break_starts_at' => null,
                'break_ends_at' => null,
                'slot_interval_minutes' => 30,
                'buffer_minutes' => 0,
                'is_open' => false,
            ],
            [
                'weekday' => 1,
                'opens_at' => '08:00:00',
                'closes_at' => '18:00:00',
                'break_starts_at' => '12:00:00',
                'break_ends_at' => '13:00:00',
                'slot_interval_minutes' => 30,
                'buffer_minutes' => 0,
                'is_open' => true,
            ],
            [
                'weekday' => 2,
                'opens_at' => '08:00:00',
                'closes_at' => '18:00:00',
                'break_starts_at' => '12:00:00',
                'break_ends_at' => '13:00:00',
                'slot_interval_minutes' => 30,
                'buffer_minutes' => 0,
                'is_open' => true,
            ],
            [
                'weekday' => 3,
                'opens_at' => '08:00:00',
                'closes_at' => '18:00:00',
                'break_starts_at' => '12:00:00',
                'break_ends_at' => '13:00:00',
                'slot_interval_minutes' => 30,
                'buffer_minutes' => 0,
                'is_open' => true,
            ],
            [
                'weekday' => 4,
                'opens_at' => '08:00:00',
                'closes_at' => '18:00:00',
                'break_starts_at' => '12:00:00',
                'break_ends_at' => '13:00:00',
                'slot_interval_minutes' => 30,
                'buffer_minutes' => 0,
                'is_open' => true,
            ],
            [
                'weekday' => 5,
                'opens_at' => '08:00:00',
                'closes_at' => '18:00:00',
                'break_starts_at' => '12:00:00',
                'break_ends_at' => '13:00:00',
                'slot_interval_minutes' => 30,
                'buffer_minutes' => 0,
                'is_open' => true,
            ],
            [
                'weekday' => 6,
                'opens_at' => '08:00:00',
                'closes_at' => '14:00:00',
                'break_starts_at' => null,
                'break_ends_at' => null,
                'slot_interval_minutes' => 30,
                'buffer_minutes' => 0,
                'is_open' => true,
            ],
        ];

        foreach ($hours as $hour) {
            BusinessHour::create($hour);
        }
    }
}