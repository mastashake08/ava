<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPageLit extends Model
{
    //
    protected $table = 'front_page_literature';
    protected $fillable = [
      'title',
      'company_name',
      'top_page_header',
      'top_page_body',
      'about_page_header',
      'about_page_body',
      'whatwedo',
      'intro',
      'services_page_header',
      'services_page_icon1',
      'services_page_header1',
      'services_page_body1',
      'services_page_icon2',
      'services_page_header2',
      'services_page_body2',
      'services_page_icon3',
      'services_page_header3',
      'services_page_body3',
      'services_page_icon4',
      'services_page_header4',
      'services_page_body4',
      'call_to_action_body',
      'contact_page_header',
      'contact_page_body',
      'contact_page_phone',
      'contact_page_email',
    ];
}
