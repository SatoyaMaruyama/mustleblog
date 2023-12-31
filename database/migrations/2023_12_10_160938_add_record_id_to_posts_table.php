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
       Schema::table('posts', function (Blueprint $table) {
       $table->foreignId('record_id')->constrained()->onDelete('cascade');   
        //'record_id' は 'recordsテーブル' の 'id' を参照する外部キーです
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
          $table->dropForeign(['record_id']);
          $table->dropColumn('record_id');
        });
    }
};
