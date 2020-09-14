<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beans', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('country', 100)->nullable(false);
            $table->string('area', 100);
            $table->string('elevation', 100);
            $table->string('farm', 100);
            $table->string('farmer', 100);
            $table->string('variety', 100);
            $table->integer('roasting')->unsigned()->nullable(false);
            $table->string('method_of_processing', 100);
            $table->tinyInteger('caffein')->unsigned()->default(0);
            $table->string('flavor', 1000);
            $table->string('shop', 100)->nullable(false);
            $table->string('branch', 100);
            $table->date('purchase_date')->nullable(false);
            $table->integer('weight')->unsigned()->nullable(false);
            $table->integer('price')->unsigned()->nullable(false);
            $table->timestamps();
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beans');
    }
}
