<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->increments("idDepense");
            $table->unsignedInteger("mois");
            /*$table->integer("idRevenue")->unsigned();
            $table->foreign("idRevenue")->references('idRevenue')->on('revenues');*/
            $table->double("montant")->require()->unsigned();
            $table->string("categorieDepense")->require();
            $table->string("description")->require();
            $table->date("date")->require();
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
        Schema::dropIfExists('depenses');
    }
}
