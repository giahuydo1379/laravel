<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\Admin\ListCategorySV;
class ListCategoryController extends Controller
{
	public function __construct(ListCategorySV $Category)
	{
		$this->listCategorySV = $Category;
	 }
	
	 public function getListCategory()
	 {
		 return $this->listCategorySV ->getListCategory();
	 }
}