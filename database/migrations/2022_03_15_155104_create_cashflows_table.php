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
        Schema::create('cashflows', function (Blueprint $table) {
            $table->id();
            $table->string('cf_id');
            $table->string('slug')->unique();
            $table->timestamp('date')->nullable();
            $table->foreignId('resource_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('subcategory_id')->nullable();
            $table->text('desc')->nullable();
            $table->integer('debit')->nullable();
            $table->integer('credit')->nullable();
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
        Schema::dropIfExists('cashflows');
    }
};
