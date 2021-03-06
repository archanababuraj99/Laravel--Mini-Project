<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bookimg', function (Blueprint $table) {
            $table->id("B_id");
            $table->integer("e_id");
            $table->integer("Cus_id");
            $table->string("mob");
            $table->string("E_descrip");
            $table->string("No_of_members");
            $table->integer("Status")->default('0');
            $table->string("email");
            $table->string("date");
            $table->string("venu");
            $table->string("rejectreason",1000)->nullable();
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
        Schema::dropIfExists('tbl_bookimg');
    }
}
