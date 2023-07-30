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
        Schema::create('dbk_cur_tbcategory', function (Blueprint $table) {
            $table->bigIncrements('CategoryID');
            $table->string('Category', 250);
            $table->unsignedBigInteger('OrderNo');
            $table->enum('IsActive', ['y', 'n'])->default('y');
            $table->string('Image', 250)->nullable();
            $table->enum('IsDeleted', ['y', 'n'])->default('n');
            $table->datetime('LastUpdatedOn');
            $table->unsignedBigInteger('LastUpdatedBy');
            $table->datetime('CreatedOn');
            $table->unsignedBigInteger('CreatedBy');
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dbk_cur_tbcategory');
    }
};
