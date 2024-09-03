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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'preference_user_id'
            )->cascadeOnDelete();
            $table->string('preferred_density')->nullable();
            $table->string('preferred_trims')->nullable();
            $table->string('preferred_fabrics')->nullable();
            $table->string('preferred_pull_settings')->nullable();
            $table->string('same_color_sew_our')->nullable();
            $table->string('preferred_formats')->nullable();
            $table->string('blending')->nullable();
            $table->string('dgt_additional_instructions')->nullable();
            $table->string('dgt_instructions')->nullable();
            $table->string('underbase')->nullable();
            $table->string('vector_detail_work')->nullable();
            $table->string('vector_file_format')->nullable();
            $table->string('vector_printing_process')->nullable();
            $table->string('vector_color_list')->nullable();
            $table->string('vector_separation')->nullable();
            $table->string('vc_additional_instruction')->nullable();
            $table->string('vc_instructions')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferences');
    }
};
