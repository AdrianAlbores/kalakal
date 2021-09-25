<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId ('user_id')->constrained();
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('to');
            $table->decimal('amount');
            $table->decimal('exhcnage_rate');
            $table->set('status',['verified','pending','denied'])->default('pending');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign ('from')->references('id')->on('crypt_lists');
            $table->foreign ('to')->references('id')->on('crypt_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchange_logs');
    }
}