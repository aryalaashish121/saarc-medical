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
            $table->unsignedBigInteger('membership_type')->nullable();
            $table->foreign('membership_type')->references('id')->on('membership_types')->onDelete('cascade');
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
            $table->unsignedBigInteger('p_country');
            $table->foreign('p_country')->references('id')->on('country')->onDelete('cascade');
            $table->string('p_state');
            $table->string('p_district');
            $table->string('p_municipality');
            $table->string('p_ward_no');
            $table->string('p_village_name');

            $table->unsignedBigInteger('t_country');
            $table->foreign('t_country')->references('id')->on('country')->onDelete('cascade');
            $table->string('t_state');
            $table->string('t_district');
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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('is_aproved')->default(false);
            $table->timestamp('approved_at')->nullable();
            $table->boolean('is_rejected')->default(false);
            $table->timestamp('rejected_at')->nullable();
           
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
