<?php

use App\Models\Appointment;
use App\Models\BusinessHour;
use App\Models\Category;
use App\Models\Service;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function serviceForAppointmentTest(): Service
{
    $category = Category::create([
        'name' => 'Cílios',
        'slug' => 'cilios',
        'icon' => 'sparkles',
        'sort_order' => 1,
        'is_active' => true,
    ]);

    $subcategory = Subcategory::create([
        'category_id' => $category->id,
        'name' => 'Extensão',
        'slug' => 'extensao',
        'icon' => 'eye',
        'sort_order' => 1,
        'is_active' => true,
    ]);

    return Service::create([
        'subcategory_id' => $subcategory->id,
        'name' => 'Volume Brasileiro',
        'slug' => 'volume-brasileiro',
        'description' => 'Serviço de teste',
        'image' => 'teste.jpg',
        'duration_minutes' => 60,
        'price_cents' => 12000,
        'sort_order' => 1,
        'is_active' => true,
    ]);
}

it('creates an appointment linked to the authenticated user through the API', function (): void {
    $user = User::factory()->create();
    $service = serviceForAppointmentTest();

    BusinessHour::create([
        'weekday' => 1,
        'opens_at' => '08:00:00',
        'closes_at' => '18:00:00',
        'break_starts_at' => null,
        'break_ends_at' => null,
        'slot_interval_minutes' => 30,
        'buffer_minutes' => 0,
        'is_open' => true,
    ]);

    $this->actingAs($user)
        ->postJson('/api/appointments', [
            'service_id' => $service->id,
            'date' => '2026-08-10',
            'time' => '08:00',
            'payment_method' => 'pix',
            'customer_name' => $user->name,
            'customer_email' => $user->email,
        ])
        ->assertCreated()
        ->assertJsonPath('appointment.user_id', $user->id);

    expect(Appointment::query()->whereBelongsTo($user)->count())->toBe(1);
});

it('does not create appointments for guests', function (): void {
    $service = serviceForAppointmentTest();

    $this->postJson('/api/appointments', [
        'service_id' => $service->id,
        'date' => '2026-08-10',
        'time' => '08:00',
        'payment_method' => 'pix',
        'customer_name' => 'Visitante',
    ])->assertUnauthorized();

    expect(Appointment::count())->toBe(0);
});