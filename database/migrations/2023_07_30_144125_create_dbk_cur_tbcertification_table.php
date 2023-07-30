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
        Schema::create('dbk_cur_tbcertification', function (Blueprint $table) {
            $table->id('CertificationID');
            $table->string('Certification', 250)->nullable();
            $table->unsignedBigInteger('NoOfStaging')->nullable();
            $table->unsignedBigInteger('OrderNo')->nullable();
            $table->enum('IsActive', ['y', 'n'])->default('y');
            $table->enum('IsDeleted', ['y', 'n'])->default('n');
            $table->datetime('LastUpdatedOn')->nullable();
            $table->unsignedBigInteger('LastUpdatedBy')->nullable();
            $table->datetime('CreatedOn')->nullable();
            $table->unsignedBigInteger('CreatedBy')->nullable();
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
        Schema::dropIfExists('dbk_cur_tbcertification');
    }
};
