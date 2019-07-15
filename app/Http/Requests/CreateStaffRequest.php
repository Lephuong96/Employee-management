<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStaffRequest extends FormRequest
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
            'group_employees' => 'required',
            'name' => 'required|min:3|max:30',
            'gender' => 'required',
            'phone_number' => 'required',
            'birthday' => 'required',
            'card_number' => 'required',
            'email' => 'required',
            'address' => 'required',
        ];
    }

    public function message()
    {
        $messages = [
            'name.required' => 'Tên không được để trống!',
            'name.min' => 'Name size must be between 3 and 30!',
            'name.max' => 'Name size must be between 3 and 30!',
            'group_employees.required' => 'Nhóm nhân viên không được để trống!',
            'gender.required' => 'Chưa thêm giới tính!',
            'phone_number.required'=> 'Số điện thoại không được để trống!',
            'birthday.required' =>' Ngày sinh không được để trống!',
            'card_numberrequired' => 'Số CMND không được để trống!',
            'email.required' => 'Email không được để trống!',
            'address.required' => 'Địa chỉ không được để trống!',
        ];
        return $messages;
    }
}
