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
        Schema::create('dbk_cur_tbsubcategory', function (Blueprint $table) {
            $table->id('SubCategoryID');
            $table->unsignedBigInteger('CategoryID');
            $table->string('SubCategory', 250);
            $table->unsignedBigInteger('OrderNo');
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
        Schema::dropIfExists('dbk_cur_tbsubcategory');
    }
};
