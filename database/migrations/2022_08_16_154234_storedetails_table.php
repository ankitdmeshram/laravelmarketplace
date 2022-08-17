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
        //
        Schema::create('storedetails', function(Blueprint $table) {
            $table -> id();
            $table -> string('store_name')->unique();
            $table -> string('store_logo');
            $table -> string('store_header');
            $table -> string('store_brief');
            $table -> string('store_email');
            $table -> string('store_phone');
            $table -> timestamps();

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
};
