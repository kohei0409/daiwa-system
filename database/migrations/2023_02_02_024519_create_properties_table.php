<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('Property_id', 100)->nullable();
            $table->string('Property_status_ddone', 100)->nullable();
            $table->string('Property_status', 100)->nullable();
            $table->string('Property_bukkenName', 100)->nullable();
            $table->string('Property_adtcheck', 100)->nullable();
            $table->string('Property_bukkenid', 100)->nullable();
            $table->string('Property_newold', 100)->nullable();
            $table->string('Property_madori', 100)->nullable();
            $table->string('Property_price', 100)->nullable();
            $table->string('Property_space', 100)->nullable();
            $table->string('Property_subspace1', 100)->nullable();
            $table->string('Property_subspace2', 100)->nullable();
            $table->string('Property_buildingfloorareasize', 100)->nullable();
            $table->string('Property_subbuildingfloorareasize', 100)->nullable();
            $table->string('Property_buildingfloorareasize2', 100)->nullable();
            $table->string('Property_buildingareasize', 100)->nullable();
            $table->string('Property_subbuildingareasize', 100)->nullable();
            $table->string('Property_kenpeiritsu', 100)->nullable();
            $table->string('Property_yousekiristu', 100)->nullable();
            $table->string('Property_houseaddress', 100)->nullable();
            $table->string('Property_houseaddresssub', 100)->nullable();
            $table->string('Property_houseaddressshort', 100)->nullable();
            $table->string('Property_housestructure', 100)->nullable();
            $table->string('Property_housetop', 100)->nullable();
            $table->string('Property_trainlinename', 100)->nullable();
            $table->string('Property_traindata1', 100)->nullable();
            $table->string('Property_traindata3tohoorcar', 100)->nullable();
            $table->string('Property_traindata2', 100)->nullable();
            $table->string('Property_stationdistance', 100)->nullable();
            $table->string('Property_tatemonotext', 100)->nullable();
            $table->string('Property_toshikeikaku', 100)->nullable();
            $table->string('Property_chisei', 100)->nullable();
            $table->string('Property_youto', 100)->nullable();
            $table->string('Property_hanbaikukaku', 100)->nullable();
            $table->string('Property_setsudou', 100)->nullable();
            $table->string('Property_chikudate', 100)->nullable();
            $table->string('Property_setsubi', 100)->nullable();
            $table->string('Property_chimoku', 100)->nullable();
            $table->string('Property_icondata', 100)->nullable();
            $table->string('Property_dataoption2', 100)->nullable();
            $table->string('Property_maintext1', 100)->nullable();
            $table->string('Property_maintext1forsheet', 100)->nullable();
            $table->string('Property_rightheadertext', 100)->nullable();
            $table->string('Property_rightfootertext', 100)->nullable();
            $table->string('Property_madoriimage1', 100)->nullable();
            $table->string('Property_mainimage', 100)->nullable();
            $table->string('Property_mainimagetext', 100)->nullable();
            $table->string('Property_subimage1', 100)->nullable();
            $table->string('Property_subimage2', 100)->nullable();
            $table->string('Property_subimage3', 100)->nullable();
            $table->string('Property_subimage4', 100)->nullable();
            $table->string('Property_subimage1text', 100)->nullable();
            $table->string('Property_subimage2text', 100)->nullable();
            $table->string('Property_subimage3text', 100)->nullable();
            $table->string('Property_subimage4text', 100)->nullable();
            $table->string('Property_thphotogallery', 100)->nullable();
            $table->string('Property_sortvalue', 100)->nullable();
            $table->string('Property_memo1', 100)->nullable();
            $table->string('Property_isGentei', 100)->nullable();
            $table->string('Property_isdisplaytaxtext', 100)->nullable();
            $table->string('Property_youtubeiframe', 100)->nullable();
            $table->string('Property_youtubetitle', 100)->nullable();
            $table->string('Property_shiire', 100)->nullable();
            $table->string('Property_cost_0001', 100)->nullable();
            $table->string('Property_cost_0002', 100)->nullable();
            $table->string('Property_cost_0003', 100)->nullable();
            $table->string('Property_cost_0004', 100)->nullable();
            $table->string('Property_cost_0005', 100)->nullable();
            $table->string('Property_code_0001', 100)->nullable();
            $table->string('Property_code_0002', 100)->nullable();
            $table->string('Property_code_0003', 100)->nullable();
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
        Schema::dropIfExists('properties');
    }
}
