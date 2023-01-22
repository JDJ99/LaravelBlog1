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
        DB::table("users")
            ->insert([
                "email" => "jermainjungerman@gmail.com",
                "name" => "Jermain Jungerman",
                "password" => bcrypt("password")
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table("users")->where("email", "=", "jermainjungerman@gmail.com")->delete();
    }
};
