<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoupleInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couple_informations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->default('Frontend/img/groomsmen-3.jpg');
            $table->string('mobile');
            $table->string('gender');
            $table->string('martial')->default('unmarried');
            $table->string('religion');
            $table->string('manglik')->default('Non-Manglik');
            $table->string('caste')->nullable();
            $table->string('gothra')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('education');
            $table->string('occupation')->nullable();
            $table->string('feature');
            $table->string('complexion')->default('Fair');
            $table->string('eating')->default('Vegitarian');
            $table->string('email');
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
        Schema::dropIfExists('couple_informations');
    }
}
