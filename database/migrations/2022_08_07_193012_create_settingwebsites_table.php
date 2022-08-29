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
        Schema::create('settingwebsites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Logo')-> default('Image\munfird.png');
            $table->string('email')-> default('Mnfrid@gamil.com');
            $table->integer('phone')-> default('05684524');
            $table->string('Address')-> default('Ryhad');
            $table->string('insta')-> default('https://www.instagram.com');
            $table->string('twitt')-> default('https://www.twitter.com');
            $table->string('linked')-> default('https://www.linked in.com');
            $table->timestamps();
        });
        DB::table('settingwebsites')->insert(
            ['Logo' => 'Image\munfird.png', 'email' => 'Mnfrid@gamil.com','phone' => '05684524','Address'=>'Ryhad','insta' => 'https://www.instagram.com','twitt'=>'https://www.twitter.com','linked'=>'https://www.linked in.com']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settingwebsites');
    }
};
