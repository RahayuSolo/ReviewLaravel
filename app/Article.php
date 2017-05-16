<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    public $table = 'articles';
	
    public $fillable = ['title', 'content','writer'];
	
	
	  public static function valid() {

    return array(

      'content' => 'required'

     );

  }
}