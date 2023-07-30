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
        Schema::create('cms_categoryprogram', function (Blueprint $table) {
            $table->unsignedBigInteger('CategoryID');
            $table->unsignedBigInteger('ProgramID');
            $table->primary(['CategoryID', 'ProgramID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_categoryprogram');
    }
};
