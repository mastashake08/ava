<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPictureBodyTextLinkToFrontPageLiterature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('front_page_literature', function (Blueprint $table) {
            //
            $table->string('pic_1_header');
            $table->string('pic_1_body');
            $table->string('pic_1_link');
            $table->string('pic_2_header');
            $table->string('pic_2_body');
            $table->string('pic_2_link');
            $table->string('pic_3_header');
            $table->string('pic_3_body');
            $table->string('pic_3_link');
            $table->string('pic_4_header');
            $table->string('pic_4_body');
            $table->string('pic_4_link');
            $table->string('pic_5_header');
            $table->string('pic_5_body');
            $table->string('pic_5_link');
            $table->string('pic_6_header');
            $table->string('pic_6_body');
            $table->string('pic_6_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('front_page_literature', function (Blueprint $table) {
            //
        });
    }
}
