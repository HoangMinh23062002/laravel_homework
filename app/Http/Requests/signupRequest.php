<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages()
    {
        return[
            'name.string'=>'vui lòng điền tên cho đúng',
            'age.numeric'=>'vui lòng nhập tuổi cho đúng',
            'date.string'=>'vui lòng nhập ngày cho đúng',
            'phone.numeric'=>'vui lòng kiểm tra sdt',
            'web.string'=>'vui lòng kiểm tra lại kí tự',
            'address.string'=>'vui lòng nhập lại địa chỉ'
        ];
    }
}
