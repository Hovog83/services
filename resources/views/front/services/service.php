<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Common\Categorie;
use App\Models\Common\Subcategory;
use App\Models\Common\Service;


class serviceController extends Controller{

    public function index($lg,$cat=null,$subCat=null){
        $categorie = new Categorie();
        $subcategory = new Subcategory();
        $service = new Service();

        if(empty($cat) && empty($subCat)){   
            $view = 'front.service.catlist';
            $data = array();
        }elseif(!empty($cat) && empty($subCat)) {
            $categorie = Categorie::find($cat);
            $view        = 'front.service.serviceList';
            $serviceList = $service->getServiceForCat($cat);
            $data        = array(
                    "serviceList" => $serviceList,
                    "categorie"   => $categorie,
                    "subcategory" => $subcategory,
                    "service"     => $service,
                );
        }elseif(!empty($cat) && !empty($subCat)) {
            $view        = 'front.service.serviceList';
            $serviceList = $service->getServiceForSubCat($subCat);
            $categorie   = Categorie::find($cat);
            $subcategory = Subcategory::find($subCat);
            $data        = array(
                    "serviceList" => $serviceList,
                    "categorie"   => $categorie,
                    "subcategory" => $subcategory,
                    "service"     => $service,
                );
        }
       return view($view,$data);
    }
}

