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
        Schema::create('digitizings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('po');
            $table->string('placement');
            $table->string('width');
            $table->string('height');
            $table->string('unit');
            $table->string('febric_type');
            $table->unsignedInteger('no_of_colors');
            $table->string('febric_color');
            $table->string('thread_type');
            $table->string('background_filled');
            $table->string('preferred_density')->nullable();
            $table->string('preferred_trims')->nullable();
            $table->string('preferred_fabrics')->nullable();
            $table->string('preferred_pull_settings')->nullable();
            $table->string('same_color_sew_our')->nullable();
            $table->string('preferred_formats')->nullable();
            $table->string('blending')->nullable();
            $table->string('additional_instructions')->nullable();
            $table->string('instructions')->nullable();
            $table->foreignId('order_id')->constrained(
                table: 'orders',
                indexName: 'digitizing_order_id'
            )->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digitizings');
    }
};
