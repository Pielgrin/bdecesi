<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite', function(Blueprint $table) {
            $table->increments('ID_Activite');
            $table->string('Nom', 100);
            $table->boolean('Is_Deleted', 100);
            $table->string('Date', 100);
            $table->string('Adresse', 100);
            $table->integer('ID_User')->unsigned();
            $table->foreign('ID_User')->references('ID_User')->on('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activite');
    }
}
