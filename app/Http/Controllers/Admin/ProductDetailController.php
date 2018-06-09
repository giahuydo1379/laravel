<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Providers\Admin\ListProductService;
use App\Providers\Admin\ListOptionGroupService;
use App\Providers\Admin\ListCategorySV;
use App\Providers\Admin\OptionSV;
class ProductDetailController extends Controller
{
	public function __construct( ListOptionGroupService $listOptionGroupService, ListProductService $listProductService,ListCategorySV $Category,
	OptionSV $optionSV)
	{
		$this->listProductService = $listProductService;
		$this->listOptionGroupService = $listOptionGroupService;
		$this->listCategorySV = $Category;
		$this->OptionSV = $optionSV;
	 }
	public function showproductDetails(Request $Request,$id='')
    {
		$user = DB::table('product')
		->leftJoin('product_options', 'product.id', '=', 'product_options.product_id')
		->leftJoin('options', 'product_options.options_option_id', '=', 'options.option_id')
		->leftJoin('option_group', 'option_group.optiongroup_id', '=', 'options.option_group_optiongroup_id')
		->select('product.*', 'option_group.optiongroup_name', 'options.option_name', 'product_options.price')
		->where('product.id',$id)
		
		->get();
		return view('showProductDetails',['users'=>$user]);
	}
}