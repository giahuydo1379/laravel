<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    protected $table = "options";
    protected $primaryKey = 'option_id';
    public  $timestamps  = false;


    public function add($input) {

    
        $model = new options();
        $model->option_name = $input['option_name'];
     //   $data = $input['Option_group'];

        $model->option_group_optiongroup_id = $input['Option_group'];
        $model->save();

    }

}
