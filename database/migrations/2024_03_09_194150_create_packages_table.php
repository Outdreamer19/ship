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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('tracking_number')->index();
            $table->float('weight')->nullable();
            $table->string('vendor');
            $table->string('pickup_location');
            $table->text('order_description')->nullable();
            $table->integer('balance')->nullable();
            $table->string('status');
            $table->string('courier')->nullable();
            $table->unsignedBigInteger('usd_value')->nullable();
            $table->timestamp('received_at')->nullable();
            $table->string('invoice_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
