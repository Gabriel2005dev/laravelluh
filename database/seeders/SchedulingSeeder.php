<?php

namespace Database\Seeders;

use App\Models\BusinessHour;
use Illuminate\Database\Seeder;

class SchedulingSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(0, 6) as $weekday) {
            BusinessHour::updateOrCreate(
                ['weekday' => $weekday],
                [
                    'opens_at' => in_array($weekday, [0], true) ? null : '08:00',
                    'closes_at' => in_array($weekday, [0], true) ? null : '18:00',
                    'break_starts_at' => in_array($weekday, [0], true) ? null : '12:00',
                    'break_ends_at' => in_array($weekday, [0], true) ? null : '13:00',
                    'slot_interval_minutes' => 30,
                    'buffer_minutes' => 0,
                    'is_open' => ! in_array($weekday, [0], true),
                ]
            );
        }
    }
}