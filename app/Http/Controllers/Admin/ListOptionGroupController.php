<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\Admin\ListOptionGroupService;
class ListOptionGroupController extends Controller
{
	public function __construct( ListOptionGroupService $listOptionGroupService)
	{
		$this->listOptionGroupService = $listOptionGroupService;	
	 }
	
	public function getListOptionGroup(Request $Request)
	{
		$id = $Request->id;
	//	return $id;
		$listOptionGroup= $this->listOptionGroupService->getListOptionGroup()
		->where('category_CategoryID',$id)
		->toArray();
		return 	view('optionview',['listoption'=>$listOptionGroup]);
	
		
	}
}