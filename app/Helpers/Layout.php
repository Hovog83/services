<?php
namespace app\Helpers;

use Illuminate\Http\Request;
use App\Models\Common\MenuPages;
use App\Models\Common\Pages;

class Layout{

  public static function getMenuTop(){
  		$pages = new MenuPages;
  		return $pages->getMenu();
  }
 
}