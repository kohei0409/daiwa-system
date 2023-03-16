<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('manufacturers_id', 100);
                $table->string('manufacturers_type', 100);
                $table->string('manufacturers_name', 100);
                $table->string('manufacturers_manager', 100);
                $table->string('manufacturers_post', 100);
                $table->text('manufacturers_address');
                $table->string('manufacturers_tel', 100);
                $table->string('manufacturers_telsub', 100);
                $table->string('manufacturers_mail', 100);
                $table->string('manufacturers_remarks', 100);
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
        Schema::dropIfExists('manufacturers');
    }
}
