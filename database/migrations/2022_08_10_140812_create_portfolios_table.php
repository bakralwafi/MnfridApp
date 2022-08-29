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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_services');
            $table->string('titel');
            $table->string('descraption');
            $table->string('type_servicesar');
            $table->string('titelar');
            $table->string('descraptionar');
            $table->string('image');
            $table->timestamps();
        });
        DB::table('portfolios')->insert(
            ['type_services' => 'GRAPHIC DESIGN',
            'titel' => 'SOCIAL MEDIA POSTS
            BILLBOARDS
            MAGAZINE DESIGNS
            IDENTITIES',
            'descraption'=>'Designs that will transform your brand; crafted and executed based on your desires. Click here for more.',
            'type_servicesar' => ' تصميم جرافيك ',
            'titelar'=>'
            اللوحات الإعلانية
            تصاميم المجلات
            الهويات

            ',
            'descraptionar' => '   تصاميم تأخذ علامتك لبعد جديد من التأثير، تتنوع حسب احتياجك وتصمم وفق رغبتك. ',
             'image' => 'Image\protfolio\graphicdesign.png'

             ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
};
