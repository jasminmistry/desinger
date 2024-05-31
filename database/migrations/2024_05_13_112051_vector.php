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
        Schema::create('vectors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained(
                table: 'orders',
                indexName: 'vectors_order_id'
            )->cascadeOnDelete();
            $table->string('name');
            $table->string('po');
            $table->string('placement');
            $table->string('width');
            $table->string('height');
            $table->string('unit');
            $table->unsignedInteger('no_of_colors');
            $table->string('febric_color');
            $table->tinyInteger('trapping')->default(0);
            $table->string('psd_color');
            $table->string('amount_of_details');
            $table->string('color_type');
            $table->string('separation');
            $table->string('underbase')->nullable();
            $table->string('vector_detail_work')->nullable();
            $table->string('vector_file_format')->nullable();
            $table->string('vector_printing_process')->nullable();
            $table->string('vector_color_list')->nullable();
            $table->string('vector_separation')->nullable();
            $table->string('additional_instruction')->nullable();
            $table->string('instructions')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vectors');
    }
};
