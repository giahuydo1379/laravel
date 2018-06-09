<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Insert_OptionGroup_Validation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'optiongroup_name' => 'required|min:5|max:235',
           'category' => 'required',
           
        ];
    }
	
	public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'max'=>':attribute không được quá :max ký tự',
			'min'=>':attribute không được ít hơn :min ký tự',
        ];
    }
	
	public function attributes(){
        return [
            'optiongroup_name'=>'Tên nhóm thuộc tính',
            'category'=>'Thể loại',
        ];
    }
}
