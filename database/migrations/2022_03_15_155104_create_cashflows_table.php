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
            $table->string('cfid');
            $table->string('slug')->unique();
            $table->timestamp('made_on')->nullable();
            $table->foreignId('resource_id');
            $table->foreignId('category_id');
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
