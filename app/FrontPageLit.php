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
      'top-page-header',
      'top-page-body',
      'about-page-header',
      'about-page-body',
      'whatwedo',
      'intro',
      'services-page-header',
      'services-page-icon1',
      'services-page-header1',
      'services-page-body1',
      'services-page-icon2',
      'services-page-header2',
      'services-page-body2',
      'services-page-icon3',
      'services-page-header3',
      'services-page-body3',
      'services-page-icon4',
      'services-page-header4',
      'services-page-body4',
      'call-to-action-body',
      'contact-page-header',
      'contact-page-body',
      'contact-page-phone',
      'contact-page-email',
    ];
}
