<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\Admin\ListCategorySV;
use App\Providers\Admin\OptionSV;
use App\Providers\Admin\ListOptionGroupService;
use App\Providers\Admin\ListProductService;

use App\Http\Model\product;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\InsertValidation;

class InsertProductController extends Controller
{
	public function __construct(ListCategorySV $Category, ListOptionGroupService $listOptionGroupService, ListProductService $listProductService,
	OptionSV $optionSV)
	{
		$this->listCategorySV = $Category;
		$this->listProductService = $listProductService;
		$this->listOptionGroupService = $listOptionGroupService;
		$this->OptionSV = $optionSV;
	
	 }

	 public function getListProduct(){
		$model = new product();
		$data = $model->getAllProducts();
	
	   return view('showProduct', ['users' => $data]);    
	}

	public function getListProduct2(){
		$model = new product();
		$data = $model->getAllProducts();
		return view('showProduct', ['data' => $data]);
	}

	public function addProduct(InsertValidation $request){
		// $this->validate($request,[
		// 	'name' => 'required|min:5|max:235',
		// 	'description' => 'required|min:5|max:235',
		// 	'quantity' => 'required|numeric',
		// 	'category_CategoryID' => 'required',
		// 	'price' => 'required|numeric',
		// ],[
		// 	'name.required' => ' Tên không được để trống',
		// 	'name.min' => ' Tên không được ít hơn 5 kí tự.',
		// 	'name.max' => 'Tên không được nhiều hơn 235 kí tự.',
		// 	'description.required' => ' Mô tả không được để trống',
		// 	'description.min' => ' Mô tả không được ít hơn 5 kí tự.',
		// 	'description.max' => 'Mô tả không được nhiều hơn 235 kí tự.',
		// 	'quantity.required' => 'Số lượng không được để trống.',
		// 	'quantity.numeric' => ' Số lượng phải là số',
		// 	'category_CategoryID.required' => 'Thể loại không được để trống.',
		// 	'price.numeric' => ' Giá phải là số',
		// 	'price.required' => 'Giá không được để trống.',
		// ]);

		 $request->all();

		$model = new product();
		$data = $request;
		$model->add($data);
		return $this->getListProduct();
	
	}

	 public function insertProduct(){
		$listCategory=$this->listCategorySV ->getListCategory();
		//dd($listCategory);
		if(isset($listCategory)){
			$results['listCategorys'] = $listCategory->toArray();
		}
		else
		{
			$results['errs'] = "not get item listcategory";
		}
		
		//dd($results['listCategorys']);
		return view('insertProduct',$results);        
	}

}