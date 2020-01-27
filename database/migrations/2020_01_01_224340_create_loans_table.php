<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('application_status');
              $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->char('sex',6);
            $table->date('dob');
            $table->string('marital_status'); //maried or single
            $table->string('occupation');
            $table->string('employment_status'); //self employ or employed
            $table->string('income_source');
            $table->string('company_name');
            $table->string('sector'); // private sector , public sector
            $table->string('company_address');
            $table->string('home_town');
            $table->string('local_govt');
            $table->string('state');
            $table->string('nationality');
            $table->string('residential_address');
            $table->string('residential_state');
            $table->string('residential_country');
            $table->string('zip_code');
            $table->string('identification_means'); //drivers license, inter pasport
            $table->string('identification_number');
            $table->string('project_location');
            $table->string('project_lga');
            $table->string('project_state');
            $table->string('titledoc_type');
            $table->string('ref_no');
            $table->string('land_size');
            $table->string('beacon_number');
            $table->string('design_type'); //One bedroom flat, 2-bedroom flat/bungalow
            $table->string('topography'); //rough , plane
            $table->string('national_housing_contributor');
            $table->string('nhf_number'); // if yes above
            $table->string('nhf_duration'); //if yes above
            $table->string('repayment_option'); //mortgage, personal savings, salary
            $table->string('mortgage_bank'); //list if mortgage is selected above
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
