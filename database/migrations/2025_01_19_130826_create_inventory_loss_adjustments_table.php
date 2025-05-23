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
        Schema::create('inventory_loss_adjustments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('time')->nullable();
            $table->string('type')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('item')->nullable();
            $table->string('lot_number')->nullable();
            $table->date('expiration_date')->nullable();
            $table->integer('quantity_available')->default(0)->nullable();
            $table->integer('quantity_in_stock')->default(0)->nullable();
            $table->text('reason')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_loss_adjustments');
    }
};
