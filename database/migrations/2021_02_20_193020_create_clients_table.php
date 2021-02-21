<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('mobile');
            $table->string('email');
            $table->string('password');
            $table->string('balance')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('api_token')->nullable();
            $table->string('fcm_token')->nullable();
            $table->string('locale')->default('en')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
