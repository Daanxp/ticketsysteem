<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('address');
            $table->string('zip');
            $table->string('city');
            $table->text('description')->nullable();
            $table->decimal('ticket_price', $precision = 10, $scale = 2);
            $table->decimal('service_costs', $precision = 10, $scale = 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
