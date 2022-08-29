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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')-> default('admin');
            $table->string('email')->unique()-> default('admin@admin.com');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')-> default('123456789');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(
            ['name' => 'admin', 'email' => 'admin@gamil.com','password' => bcrypt('admin1234')]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
