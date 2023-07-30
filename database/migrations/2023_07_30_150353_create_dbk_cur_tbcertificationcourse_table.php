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
        Schema::create('dbk_cur_tbcertificationcourse', function (Blueprint $table) {
            $table->id('CertificationCourseID');
            $table->unsignedBigInteger('CertificationID');
            $table->unsignedBigInteger('CourseID');
            $table->unsignedBigInteger('StageNo');
            $table->enum('IsDeleted', ['y', 'n'])->default('n');
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
        Schema::dropIfExists('dbk_cur_tbcertificationcourse');
    }
};
