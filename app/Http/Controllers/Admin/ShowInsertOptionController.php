<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Providers\Admin\ListOptionGroupService;
use App\Http\Model\option_group;
use App\Http\Model\options;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Insert_Option_Validation;


use Illuminate\Http\Request;

class ShowInsertOptionController extends Controller{

    public function __construct(ListOptionGroupService $ListOptionGroupService)
	{
        $this->ListOptionGroupService = $ListOptionGroupService;
       // $this->middleware('auth');
     }
     
    public function viewInsertOption(){
        $ListOptionGroupService=$this->ListOptionGroupService -> getListOptionGroup();
        return view('option_create',['option_group'=>$ListOptionGroupService]);
    }

    public function getListOptionGroup(Insert_Option_Validation $Request)
	{
        $Request->all();
		//$id = $Request->id;
    //   return $id;
        $model = new options();
        $data = $Request;
		$model->add($data);
    }
    public function addInsert(Request $request){
        $id = $Request->id;
        return $id;
		$model = new option_group();
		$data = $request;
		$model->add($data);
    }
}