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
            services_page_header
services_page_icon1
services_page_header1
services_page_body1
services_page_icon2
services_page_header2
services_page_body2
services_page_icon3
services_page_header3
services_page_body3
services_page_icon4
services_page_header4
services_page_body4
call_to_action-body
contact_page_header
contact_page_body
contact_page_phone
contact_page_email
*/
            $table->string('title', 50);
            $table->string('company_name', 50);
            $table->string('top_page_header');
            $table->longText('top_page_body');
            $table->string('about_page_header');
            $table->longText('about_page_body');
            $table->string('contact_page_header');
            $table->longText('contact_page_body');
            $table->string('contact_page_phone');
            $table->string('contact_page_email');
            $table->string('call_to_action_body');
            $table->string('services_page_icon1');
            $table->string('services_page_header1');
            $table->longText('services_page_body1');
            $table->string('services_page_icon2');
            $table->string('services_page_header2');
            $table->longText('services_page_body2');
            $table->string('services_page_icon3');
            $table->string('services_page_header3');
            $table->longText('services_page_body3');
            $table->string('services_page_icon4');
            $table->string('services_page_header4');
            $table->longText('services_page_body4');

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
