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
        Schema::create('cms_certificationprogram', function (Blueprint $table) {
            $table->unsignedBigInteger('CertificationID');
            $table->unsignedBigInteger('ProgramID');
            $table->primary(['CertificationID', 'ProgramID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_certificationprogram');
    }
};
