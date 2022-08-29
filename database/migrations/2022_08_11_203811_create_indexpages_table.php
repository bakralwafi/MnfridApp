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
        Schema::create('indexpages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titel');
            $table->string('aboutsection');
            $table->string('message');
            $table->string('T_portfolio');
            $table->string('T_worked');
            $table->string('T_service');
            $table->string('titelar');
            $table->string('aboutsectionar');
            $table->string('messagear');
            $table->string('T_portfolioar');
            $table->string('T_workedar');
            $table->string('T_servicear');
        });
        DB::table('indexpages')->insert(
            ['titel' => 'how is Mnfrid>', 'aboutsection' => 'A creative agency that grows its clients through innovative solutions, product development, content management and digital marketing through a talented and sophisticated marketing and business workforce.',
            'message' => 'PROVIDING IDEAL SOLUTIONS IN ADVERTISING WITH RESULTS THAT EXCEED CUSTOMER EXPECTATIONS',
            'T_portfolio'=>'PORTFOLIO',
            'T_worked' => 'WE WORKED WITH',
            'T_service'=>'SERVICES',
            'titelar' => 'من مُنفرد؟',
             'aboutsectionar' => 'وكالة إبداعية تعمل على نمو عملائها من خلال الحلول المبتكرة وتطوير المنتجات وإدارة المحتوى والتسويق الرقمي من خلال قوة عاملة متطورة وموهوبة في مجال التسويق والأعمال.',
             'messagear' => 'تقديم حلول مثالية في الإعلان بنتائج تفوق توقعات العملاء',
             'T_portfolioar'=>'ملف الاعمال',
             'T_workedar' => 'شركائنا',
             'T_servicear'=>'خدماتنا']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indexpages');
    }
};
