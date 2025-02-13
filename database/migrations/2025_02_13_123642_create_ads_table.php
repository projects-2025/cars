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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->longText('details', 300);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('city_id');

            $table->boolean('status')->default(true);
            $table->timestamps();

            // relations fk
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
