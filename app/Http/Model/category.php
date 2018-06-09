<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
	protected $primaryKey = 'CategoryID';
	public function childs(){
      return $this->hasMany('App\Http\Model\category','parent_id');
    }

    
}
