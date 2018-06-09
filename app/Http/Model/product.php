<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Pagination\Paginator;

class product extends Model
{
    protected $table = "product";
    protected $primaryKey = 'id';
    public  $timestamps  = false;

    public function add($input) {

        $model = new product();
        $model->name = $input['name'];
        $model->description = $input['description'];
        $model->quantity = $input['quantity'];
        $model->product_status = $input['product_status'];
        $model->manufacture_id = $input['manufacture_id'];
        $model->category_CategoryID = $input['category_CategoryID'];
        $model->active = $input['active'];

        if($model->save()) {
            $id = $model->id;
            $data = $input['option'];
            if(isset($data)){ 
                $modelProductOption = new product_options();
                $modelProductOption->add($id, $input);
            }
           
        }
    }

    public function getAllProducts() {
        $objects = DB::table('product')
        ->join('category', 'product.category_CategoryID', 'category.CategoryID')
        ->join('manufacture', 'product.manufacture_id', 'manufacture.id')
        -> orderBy('product.id', 'desc')
        ->select('product.*','category.CategoryName', 'manufacture.manufacture_name')
        ->paginate(5);
        
      
        return $objects;
    }
}

