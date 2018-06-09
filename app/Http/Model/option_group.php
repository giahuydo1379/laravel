<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class option_group extends Model
{
    protected $table = "option_group";
    protected $primaryKey = 'optiongroup_id';
    public  $timestamps  = false;
    
    public function getListOptionGroup(){

    }

    public function options()
    {
    	return $this->hasMany('App\Http\Model\options','option_group_optiongroup_id');
    }
    
    
    public function add($input) {

    
        $model = new option_group();
        $model->optiongroup_name = $input['optiongroup_name'];
     //   $data = $input['Option_group'];

        $model->category_CategoryID = $input['category'];
        $model->save();

    }
}
