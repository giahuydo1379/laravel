<?php
namespace App\Providers\Admin;
use Illuminate\Support\ServiceProvider;
use App\Http\Model\options;
class OptionSV extends ServiceProvider    
{
    public function __construct(options $options){
        $this->options = $options;
    }
    public function getListOption()
    {
        $options=$this->options::all();
        return $options;
    }
}