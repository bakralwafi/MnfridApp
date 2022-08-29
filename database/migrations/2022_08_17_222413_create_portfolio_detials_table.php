<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_detials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('por_id');
            $table->string('type_services');
            $table->foreign('por_id')->references('id')->on('portfolios')  ->constrained()
            ->onUpdate('cascade')
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

        Schema::dropIfExists('portfolio_detials');
        $table->dropForeign(['por_id']);

    }
};
