<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Income list');
            $table->integer('Amount');
            $table->string('Month');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income');
        // $table->dropcolumn('Income list');
        // $table->dropcolumn('Amount');
        // $table->dropcolumn('Month');
        
    }
}
