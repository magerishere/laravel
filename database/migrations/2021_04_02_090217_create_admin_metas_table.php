<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_metas', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->tinyInteger('admin_id');
            $table->string('fname',50)->nullable();
            $table->string('lname',50)->nullable();
            $table->string('email',120)->nullable();
            $table->string('phone_number',11)->nullable();
            $table->mediumText('ability')->nullable();
            $table->text('about')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('admin_metas');
    }
}
