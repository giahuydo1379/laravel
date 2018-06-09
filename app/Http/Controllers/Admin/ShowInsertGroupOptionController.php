<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Providers\Admin\ListCategorySV;
use App\Http\Model\option_group;
use App\Http\Model\options;
use App\Http\Requests\Insert_OptionGroup_Validation;


use Illuminate\Http\Request;

class ShowInsertGroupOptionController extends Controller{

    public function __construct(ListCategorySV $Category)
	{
		$this->listCategorySV = $Category;
	 }
	
     
    public function viewInsertGroupOption(){
        $getListCategory=$this->listCategorySV ->getListCategory();
        return view('optionGroup_create',['getListCategory'=>$getListCategory]);
    }

    public function addInsert(Insert_OptionGroup_Validation $request){
        $request->all();
        $id = $request->id;
     //  return $id;
		$model = new option_group();
		$data = $request;
		$model->add($data);
    }
}