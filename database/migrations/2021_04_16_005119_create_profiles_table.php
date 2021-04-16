<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('jawatan')->nullable();
            $table->string('gred')->nullable();
            $table->string('jantina')->nullable();
            $table->string('taraf_perkahwinan');
            $table->string('telefon')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
            // Set foreign key supaya data pada user_id
            // akan merujuk kepada data di table users
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
