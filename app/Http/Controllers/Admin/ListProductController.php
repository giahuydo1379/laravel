<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Providers\Admin\ListProductService;
use App\Providers\Admin\ListCategorySV;
use App\Providers\Admin\OptionSV;
use App\Http\Model\product;
use Illuminate\Pagination\Paginator;


use Validator;

class ListProductController extends Controller
{


	public function __construct( ListProductService $listProductService,ListCategorySV $Category,
	OptionSV $optionSV)
	{
		$this->listProductService = $listProductService;
		$this->listCategorySV = $Category;
		$this->OptionSV = $optionSV;
	 }
	public function getListProduct(Request $request){
		
		$model = new product();
		$data = $model->getAllProducts();
		$curent=$data->currentPage();
		//return $curent;

		//$data = $model::paginate(5);
		

	//	print_r($data->toArray()); die;

	//	$listProduct= $this->listProductService->getListProduct();
		//$a= $listProduct->active;
	//	return $listProduct;
	   return view('showProduct', ['users' => $data])
	   ->with('i', ($request->input('page', 1) - 1) * 5);
		//return view('showProduct',$listProduct);     
	}

	public function getListOption(Request $Request)
	{
		$id = $Request->id;
		return $id;
		//return $this->OptionSV ->getListOption();
	}
	
}