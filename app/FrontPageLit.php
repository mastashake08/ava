<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPageLit extends Model
{
    //
    protected $table = 'front_page_literature';
    protected $fillable = [
      'whatwedo',
      'intro'
    ];
}
