<?php

// database/migrations/xxxx_xx_xx_create_cms_general_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsGeneralTable extends Migration
{
    public function up()
    {
        Schema::create('cms_general', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp_number')->nullable();
            $table->string('about_p1_heading')->nullable();
            $table->text('about_p1_text')->nullable();
            $table->string('about_p1_image')->nullable();
            $table->string('about_p2_heading')->nullable();
            $table->text('about_p2_text')->nullable();
            $table->string('about_p2_image')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_receivingmail')->nullable();
            $table->string('contact_latitude')->nullable();
            $table->string('contact_longitude')->nullable();
            $table->string('footer_facebook')->nullable();
            $table->string('footer_twitter')->nullable();
            $table->string('footer_instagram')->nullable();
            $table->string('footer_copyrights')->nullable();
            $table->datetime('LastUpdatedOn')->nullable();
            $table->unsignedBigInteger('LastUpdatedBy')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cms_general');
    }
}
