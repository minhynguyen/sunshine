<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChuDeRequest extends FormRequest
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
        'cd_ten' => 'required|max:50',
        'cd_taomoi' => 'required',
        'cd_capnhat' => 'required',
        'cd_trangthai' => 'required',
        ];
    }
    public function messages()
    {
        return [
        'cd_ten.required' => 'Tên Không Được Bỏ Trống',
        'cd_capnhat.required' => 'Ngày Cập Nhật Không Được Bỏ Trống',
        'cd_taomoi.required' => 'Ngày Tạo Mới Không Được Bỏ Trống',
        'cd_ten.max' => 'Tên Không Được Vượt Quá :max Kí Tự',
        ];
    }
}
