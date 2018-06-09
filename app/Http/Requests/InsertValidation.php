<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckInsert;


class InsertValidation extends FormRequest
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
           'name' => ['required',  
        //    function ($attribute, $value, $fail) {

        //     if ((str_word_count($value))<2) {
        //         return $fail(" $attribute phải lớn hơn 2");
        //         }
        //     }
            new CheckInsert(),
            'unique:product',
                       ],
			'description' => 'required|min:5|max:235',
			'quantity' => 'required|numeric',
			'category_CategoryID' => 'required',
			'price' => 'required|regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9]+)*$/',
        ];
    }
	
	public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'max'=>':attribute không được quá :max ký tự',
			'min'=>':attribute không được ít hơn :min ký tự',
            'numeric'=>':attribute phải là số',
            'unique'=> ':attribute đã tồn tại' 
        ];
    }
	
	public function attributes(){
        return [
            'name'=>'Tên',
            'description'=>'Mô tả',
			'quantity'=>'Số lượng',
			'category_CategoryID'=>'Thể loại',
			'price'=>'Giá',
        ];
    }
}
