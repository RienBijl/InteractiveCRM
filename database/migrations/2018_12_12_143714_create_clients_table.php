<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->text("name");
            $table->text("mail");
            $table->text("streetandhousenumber");
            $table->text("cityanzipcode");
            $table->text("state");
            $table->text("country");
            $table->longtext("description");
            $table->longtext("administrative");
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
