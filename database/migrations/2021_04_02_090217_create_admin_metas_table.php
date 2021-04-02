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
            $table->id();
            $table->tinyInteger('admin_id');
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('email',120);
            $table->string('phone_number',11);
            $table->string('ability');
            $table->text('about');
            $table->text('address');
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
