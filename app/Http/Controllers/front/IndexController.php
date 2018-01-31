<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Common\Categorie;


class IndexController extends Controller
{
    public function index(){
        $categorie = new Categorie();
        $catLIst = $categorie->getCategorieByActiv()->toArray(); 
        return view('front.index',["catLIst"=> $catLIst]);
    }

}

