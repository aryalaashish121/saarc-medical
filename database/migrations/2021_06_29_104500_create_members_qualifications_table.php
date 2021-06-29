<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('univerisity_board')->nullable();
            $table->string('level')->nullable();
            $table->string('degree')->nullable();
            $table->string('grade')->nullable();
            $table->string('completed_year')->nullable();
            $table->boolean('is_training')->nullable();

            $table->unsignedBigInteger('member_id')->nullable();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

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
        Schema::dropIfExists('members_qualifications');
    }
}
