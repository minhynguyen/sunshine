<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    const CREATED_AT ='nv_taomoi';
    const UPDATED_AT ='nv_capnhat';
    
    protected $table = 'nhanvien';
    protected $fillable = ['nv_taikhoan', 'nv_matkhau', 'nv_hoten', 'nv_gioitinh', 'nv_email', 'nv_ngaysinh', 'nv_diachi', 'nv_dienthoai', 'nv_taomoi', 'nv_capnhat', 'nv_trangthai', 'q_ma'];
    protected $guarded = ['nv_ma'];
    protected $primaryKey = 'nv_ma';
    protected $dates =['nv_taomoi', 'nv_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function quyen(){
    	return $this->belongsTo('App\Quyen', 'q_ma', 'q_ma');
    	// mot san pham chi thuoc 1 loai belongsTo()
    }
}
