<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletDetauksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId ('wallet_id')->constrained();
            $table->foreignId ('crypt_list_id')->constrained();
            $table->string('currency')->default('PHP');
            $table->decimal('amount')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_details');
    }
}
