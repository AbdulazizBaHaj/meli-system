<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePplTbStudentTable extends Migration
{
    public function up()
    {
        Schema::create('ppl_tbstudent', function (Blueprint $table) {
            $table->bigIncrements('StudentID');
            $table->string('UniqueNumber', 10);
            $table->string('Password', 50)->nullable();
            $table->string('FirstName', 250)->nullable();
            $table->string('LastName', 250)->nullable();
            $table->string('Email', 250)->nullable();
            $table->string('Mobile', 10)->nullable();
            $table->string('Company', 250)->nullable();
            $table->string('EMADNumber', 250)->nullable();
            $table->enum('ReceiveMarketingEmails', ['y', 'n'])->default('y');
            $table->enum('IsActive', ['y', 'n'])->default('y');
            $table->enum('IsDeleted', ['y', 'n'])->default('n');
            $table->datetime('LastUpdatedOn')->nullable();
            $table->unsignedBigInteger('LastUpdatedBy')->nullable();
            $table->datetime('CreatedOn')->nullable();
            $table->unsignedBigInteger('CreatedBy')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ppl_tbstudent');
    }
}
