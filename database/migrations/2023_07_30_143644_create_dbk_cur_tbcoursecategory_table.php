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
        Schema::create('dbk_cur_tbcoursecategory', function (Blueprint $table) {
            $table->unsignedBigInteger('CourseID');
            $table->unsignedBigInteger('SubCategoryID');
            $table->primary(['CourseID', 'SubCategoryID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dbk_cur_tbcoursecategory');
    }
};
