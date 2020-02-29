<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPerson');
            $table->unsignedBigInteger('idJob');
            $table->double('cost', 8,2);
            $table->string('observation',255);

            $table->foreign('idPerson')
                ->references('id')
                ->on('people');

            $table->foreign('idJob')
                ->references('id')
                ->on('jobs');

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
        Schema::dropIfExists('contracts');
    }
}
