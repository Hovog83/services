<?php

namespace App\Http\Controllers\back;

use App\Models\Common\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class CategorieController extends Controller{

    public function index(){
        $categories = Categorie::paginate(15);
    	$data = array('categories' => $categories);
        return view('back.categorie.index',$data);
    }

    public function addEdit(Request $request, $id = false) {
    	if(!$id){
	    	$categories = new Categorie();
    	}else{
    		$categories = Categorie::find($id);
    	}
        if ($request->isMethod('post')) {
          $validator = Validator::make($request->all(),Categorie::rules());
	        if ($validator->fails()) {
	            return redirect('admin/categorie/create')
	                       ->withErrors($validator,'addEdit')
	                       ->withInput();
	        }else{
                 $categories->name   = $request->name;
                 $categories->icone  = $request->icone;
                 $categories->order  = $request->order;
                 $categories->status = $request->status;
         	  	 $categories->save();
	        }
	        return redirect('admin/categorie');
        }
        return view('back.categorie.addEdit',["categories"=>$categories]);
    }
    public function delete ($id) {
        Categorie::find($id)->delete();
         return redirect('admin/categorie');
    }
}
