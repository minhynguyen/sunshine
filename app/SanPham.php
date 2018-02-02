<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    const CREATED_AT ='sp_taomoi';
    const UPDATED_AT ='sp_capnhat';
    
    protected $table = 'sanpham';
    protected $fillable = ['sp_ten', 'sp_giagoc', 'sp_giaban', 'sp_hinh', 'sp_thongtin', 'sp_danhgia', 'sp_taomoi', 'sp_capnhat', 'sp_trangthai', 'l_ma'];
    protected $guarded = ['sp_ma'];
    protected $primaryKey = 'sp_ma';
    protected $dates =['sp_taomoi', 'sp_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function loai(){
    	return $this->belongsTo('App\Loai', 'l_ma', 'l_ma');
    	// mot san pham chi thuoc 1 loai belongsTo()
    }
}
