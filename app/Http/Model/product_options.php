<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class product_options extends Model
{
    protected $table = "product_options"; 
    protected $primaryKey = 'id';
    public  $timestamps  = false;


    public function add($id, $input) {
        $data = $input['option'];

        
        foreach ($data as $key => $value){
          $model = new product_options();
          $model->product_id = $id;
          $model->options_option_id = $value;
          $model->price = $input['price'];
          $model->save();
        }
    }
}
