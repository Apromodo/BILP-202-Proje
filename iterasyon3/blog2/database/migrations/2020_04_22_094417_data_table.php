<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->mediumInteger('totaltest');
            $table->mediumInteger('totalCases');
            $table->mediumInteger('totalDeaths');
            $table->mediumInteger('totalIntensiveCare');
            $table->mediumInteger('totalIntubated');
            $table->mediumInteger('totalRecovered');
            $table->mediumInteger('tests');
            $table->mediumInteger('cases');
            $table->mediumInteger('deaths');
            $table->mediumInteger('recovered');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
