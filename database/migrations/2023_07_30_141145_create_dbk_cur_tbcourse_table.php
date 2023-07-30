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
        Schema::create('dbk_cur_tbcourse', function (Blueprint $table) {
            $table->id('CourseID');
            $table->string('Course', 250);
            $table->unsignedBigInteger('Duration')->nullable();
            $table->unsignedBigInteger('CourseDurationID')->nullable();
            $table->unsignedBigInteger('OrderNo');
            $table->enum('IsActive', ['y', 'n'])->default('y');
            $table->enum('IsDeleted', ['y', 'n'])->default('n');
            $table->datetime('LastUpdatedOn');
            $table->unsignedBigInteger('LastUpdatedBy');
            $table->datetime('CreatedOn');
            $table->unsignedBigInteger('CreatedBy');
            $table->text('TextAbout')->nullable();
            $table->text('TextAttend')->nullable();
            $table->datetime('WEBUpdatedOn')->nullable();
            $table->unsignedBigInteger('WebUpdatedBy')->nullable();
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
        Schema::dropIfExists('dbk_cur_tbcourse');
    }
};
