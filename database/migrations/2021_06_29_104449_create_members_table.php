<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no')->unique();
            $table->boolean('is_aproved')->default(false);
            $table->string('first_name_en',20);
            $table->string('middle_name_en', 20)->nullable();
            $table->string('last_name_en', 20);
            $table->string('dob_bs', 10);
            $table->date('dob_ad');
            $table->string('gender',10);
            $table->string('religion')->nullable();
            $table->string('nationality');
            $table->string('country_code')->nullable();
            $table->string('mobile', 10)->unique()->nullable();
            $table->string('aux_mobile', 10)->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('website')->unique()->nullable();
            $table->string('image')->nullable();
            //address details
            $table->unsignedBigInteger('p_state_id');
            $table->foreign('p_state_id')->references('id')->on('states')->onDelete('cascade');
            $table->unsignedBigInteger('p_district_id');
            $table->foreign('p_district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->string('p_municipality');
            $table->string('p_ward_no');
            $table->string('p_village_name');

            $table->unsignedBigInteger('t_state_id');
            $table->foreign('t_state_id')->references('id')->on('states')->onDelete('cascade');
            $table->unsignedBigInteger('t_district_id');
            $table->foreign('t_district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->string('t_municipality');
            $table->string('t_ward_no');
            $table->string('t_village_name');

            $table->boolean('is_same_address')->default(false);

            //family details
            $table->string('fathers_name')->nullable();
            $table->string('fathers_phone_no')->nullable();
            $table->string('fathers_occupation')->nullable();
            $table->string('fathers_designation')->nullable();

            $table->string('mothers_name')->nullable();
            $table->string('mothers_phone_no')->nullable();
            $table->string('mothers_occupation')->nullable();
            $table->string('mothers_designation')->nullable();
            
            //work experience 
            $table->string('acheivements')->nullable();
           
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('is_deleted')->default(false);
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('members');
    }
}
