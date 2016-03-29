<?php

namespace App\Models\common;

use Illuminate\Database\Eloquent\Model;
use App\Models\Common\Image;

class Service extends Model{

    protected $table = 'service';
	protected $hidden = ['created_at', 'updated_at'];

	public static function rules()
	{
		return [
				'title'       => 'required|max:50|min:2',
				'status'      => 'required|max:30',
				'order'       => 'required|integer',
				'description' => 'required|min:10',
				'cat_id'      => 'required|integer',
				'subCat_id'   => 'required|integer',
		];
	}
	public function getServiceImages()
	{
		return Image::where('service_id', '=', $this->id)->orderBy('order')->get();
	}

}