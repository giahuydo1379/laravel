<?php
namespace App\Providers\Admin;
use Illuminate\Support\ServiceProvider;
use App\Http\Model\product;

class ListProductService extends ServiceProvider
{
    public function __construct(product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function getListProduct()
    {
       // $option_group=$this->option_group::with('options')->get();

        $product_details=$this->productModel::all();
        return $product_details;
    }
    
}

   