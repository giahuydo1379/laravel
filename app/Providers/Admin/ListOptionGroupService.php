<?php
namespace App\Providers\Admin;
use Illuminate\Support\ServiceProvider;
use App\Http\Model\option_group;

class ListOptionGroupService extends ServiceProvider    
{
    public function __construct(option_group $option_groupModel){
        $this->option_group = $option_groupModel;
    }
   
    public function getListOptionGroup()
    {

     $option_group=$this->option_group::with('options')->get();
     return $option_group;
    }
}