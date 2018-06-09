<?php
namespace App\Providers\Admin;
use Illuminate\Support\ServiceProvider;
use App\Http\Model\category;
class ListCategorySV extends ServiceProvider    
{
    public function __construct(category $category){
        $this->model = $category;
    }
    public function getListCategory()
    {
     $category=$this->model::with('childs')
     ->where ('parent_id',null)
     ->get();
     return $category;
    }
}