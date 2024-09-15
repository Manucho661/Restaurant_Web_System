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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->default('1');
            $table->string('food_id')->default('1');
            $table->integer('quantity')->default(1);
            
            $table->timestamps();
    
        }); 
    }
};
