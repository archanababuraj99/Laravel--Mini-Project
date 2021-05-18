<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->id("admin_id");
            $table->string("admin_uname");
            $table->string("admin_password");
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('tbl_admin')->insert(
            array(
                'admin_uname' => 'admin',
                'admin_password' => 'admin123'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin');
    }
}
