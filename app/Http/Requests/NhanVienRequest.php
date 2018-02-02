<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanVienRequest extends FormRequest
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
        'nv_hoten' => 'required|max:50',
        'nv_taikhoan' => 'required|max:50',
        'nv_matkhau' => 'required|max:50',
        'nv_taomoi' => 'required',
        'nv_capnhat' => 'required',
        'nv_trangthai' => 'required',
        ];
        
    }
    public function messages()
    {
        return [
        'nv_hoten.required' => 'Tên Không Được Bỏ Trống',
        'nv_taikhoan.required' => 'Tài Khoản Không Được Bỏ Trống',
        'nv_taikhoan.unique' => 'Tài Khoản Này Đã Tồn Tại',
        'nv_capnhat.required' => 'Ngày Cập Nhật Không Được Bỏ Trống',
        'nv_taomoi.required' => 'Ngày Tạo Mới Không Được Bỏ Trống',
        'nv_ten.max' => 'Tên Không Được Vượt Quá :max Kí Tự',
        'nv_taikhoan.max' => 'Tài Khoản Không Được Vượt Quá :max Kí Tự',
        ];
    }
}
