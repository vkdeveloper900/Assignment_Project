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
            Schema::create('businesses', function (Blueprint $table) {
                $table->id();
                $table->string('business_name');
                $table->string('area')->default(''); // default empty string
                $table->string('city')->default('');
                $table->string('mobile_no' ,15);
                $table->string('category')->default('');
                $table->string('sub_category')->default('');
                $table->timestamps();
                $table->softDeletes(); // Soft delete a record
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
