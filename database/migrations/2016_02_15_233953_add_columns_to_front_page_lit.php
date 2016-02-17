<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToFrontPageLit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('front_page_literature', function (Blueprint $table) {
            /*
            services-page-header
services-page-icon1
services-page-header1
services-page-body1
services-page-icon2
services-page-header2
services-page-body2
services-page-icon3
services-page-header3
services-page-body3
services-page-icon4
services-page-header4
services-page-body4
call-to-action-body
contact-page-header
contact-page-body
contact-page-phone
contact-page-email
*/
            $table->string('title', 50);
            $table->string('company_name', 50);
            $table->string('top-page-header');
            $table->longText('top-page-body');
            $table->string('about-page-header');
            $table->longText('about-page-body');
            $table->string('contact-page-header');
            $table->longText('contact-page-body');
            $table->string('contact-page-phone');
            $table->string('contact-page-email');
            $table->string('call-to-action-body');
            $table->string('services-page-icon1');
            $table->string('services-page-header1');
            $table->longText('services-page-body1');
            $table->string('services-page-icon2');
            $table->string('services-page-header2');
            $table->longText('services-page-body2');
            $table->string('services-page-icon3');
            $table->string('services-page-header3');
            $table->longText('services-page-body3');
            $table->string('services-page-icon4');
            $table->string('services-page-header4');
            $table->longText('services-page-body4');

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
