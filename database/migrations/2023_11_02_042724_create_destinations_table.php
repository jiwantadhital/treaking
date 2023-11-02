<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('placename');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('address');
            $table->decimal('latitude', 10, 7); 
            $table->decimal('longitude', 10, 7); 
            $table->decimal('price', 10, 2); 
            $table->text('description')->nullable(); 
            $table->boolean('status')->default(0);
            $table->boolean('topdestination')->default(0);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
};