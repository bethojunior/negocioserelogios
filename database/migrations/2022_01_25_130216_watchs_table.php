<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watchs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('gender');
            $table->string('description');
            $table->unsignedBigInteger('watch_type_id');
            $table->foreign('watch_type_id')
            ->references('id')
            ->on('watch_type');
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
        Schema::dropIfExists('watchs');
    }
}
