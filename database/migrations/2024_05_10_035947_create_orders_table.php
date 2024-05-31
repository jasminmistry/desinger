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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'digitizing_user_id'
            )->cascadeOnDelete();
            $table->tinyInteger('status')->default(0);
            $table->foreignId('assigned')->nullable()->constrained(
                table: 'users',
                indexName: 'assigned_user_id'
            )->cascadeOnDelete();
            $table->tinyInteger('priority')->default(0);
            $table->tinyInteger('order_type')->default(0);
            $table->tinyInteger('is_quote')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
