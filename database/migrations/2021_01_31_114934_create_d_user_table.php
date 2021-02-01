<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_user', function (Blueprint $table) {
         
  $table->string('u_email')->unique();
  $table->string('u_name');
  $table->string('u_pwd');
  $table->timestamp('u_verifydate')->nullable();
  $table->timestamp('created_at')->nullable();
  $table->timestamp('update_at')->nullable();
  $table->string('u_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_user');
    }
}
