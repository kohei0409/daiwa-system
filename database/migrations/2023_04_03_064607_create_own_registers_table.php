<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('own_registers', function (Blueprint $table) {
            $table->id('UID')->unique();
            $table->text('BukkenID');
            $table->text('OwnerName');
            $table->text('Register');
            $table->longText('Memo');
            $table->timestamp('RegisteredTransfer');
            $table->timestamp('created_at')->nullable();
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
        Schema::dropIfExists('own_registers');
    }
}
