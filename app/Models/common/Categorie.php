<?php

namespace App\Models\common;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model{

    protected $table = 'categorie';
	
	public static function rules()
	{
		return [
				'name'   => 'required|max:50|min:2',
				'icone'  => 'required|max:30',
				'order'  => 'required|integer',
				'status' => 'required',
		];
	}
	public function sortTable($sort_array) {
        foreach ($sort_array as $key => $sort) {
        	$sort = self::find($sort);
        	$sort->order = $key;
        	$sort->save();
        }
    }
}