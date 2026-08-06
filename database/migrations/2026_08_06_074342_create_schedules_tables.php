<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('business_hours', function (Blueprint $table): void {
            $table->id();
            $table->unsignedTinyInteger('weekday')->unique();
            $table->time('opens_at')->nullable();
            $table->time('closes_at')->nullable();
            $table->time('break_starts_at')->nullable();
            $table->time('break_ends_at')->nullable();
            $table->unsignedSmallInteger('slot_interval_minutes')->default(30);
            $table->unsignedSmallInteger('buffer_minutes')->default(0);
            $table->boolean('is_open')->default(true);
        });

        Schema::create('schedule_exceptions', function (Blueprint $table): void {
            $table->id();
            $table->date('date')->unique();
            $table->time('opens_at')->nullable();
            $table->time('closes_at')->nullable();
            $table->time('break_starts_at')->nullable();
            $table->time('break_ends_at')->nullable();
            $table->unsignedSmallInteger('slot_interval_minutes')->nullable();
            $table->unsignedSmallInteger('buffer_minutes')->nullable();
            $table->boolean('is_open')->default(true);
            $table->string('reason')->nullable();
            $table->timestamps();
        });

        Schema::create('blocked_periods', function (Blueprint $table): void {
            $table->id();
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->string('reason')->nullable();
            $table->timestamps();
            $table->index(['starts_at', 'ends_at']);
        });

        Schema::create('appointments', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('service_id')->nullable()->constrained()->nullOnDelete();
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->string('status')->default('scheduled');
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');
            $table->string('customer_name');
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('service_snapshot_name');
            $table->unsignedSmallInteger('service_snapshot_duration_minutes');
            $table->unsignedInteger('service_snapshot_price_cents');
            $table->string('service_snapshot_category_name');
            $table->string('service_snapshot_subcategory_name');
            $table->timestamps();
            $table->index(['starts_at', 'ends_at', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
        Schema::dropIfExists('blocked_periods');
        Schema::dropIfExists('schedule_exceptions');
        Schema::dropIfExists('business_hours');
    }
};