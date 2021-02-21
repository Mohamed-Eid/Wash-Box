<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('price')->default(0)->nullable();
            $table->string('discount')->default(0)->nullable();
            $table->string('image')->nullable();
            $table->integer('subscription_term')->default(0)->nullable();
            $table->integer('number_of_pieces')->default(0)->nullable();
            $table->integer('number_of_visits')->default(0)->nullable();
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
        Schema::dropIfExists('packages');
    }
}
