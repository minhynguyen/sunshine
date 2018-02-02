<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    const CREATED_AT ='km_taomoi';
    const UPDATED_AT ='km_capnhat';
    
    protected $table = 'khuyenmai';
    protected $fillable = ['km_ten', 'km_noidung', 'km_batdau', 'km_ketthuc', 'km_giatri', 'nv_nguoilap', 'km_ngaylap', 'nv_kynhay', 'km_ngaykynhay', 'nv_kyduyet', 'km_ngayduyet', 'km_taomoi', 'km_capnhat' , 'km_trangthai' ];
    protected $guarded = ['sp_ma'];
    protected $primaryKey = 'sp_ma';
    protected $dates =['sp_taomoi', 'sp_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function loai(){
    	return $this->belongsTo('App\Loai', 'l_ma', 'l_ma');
    	// mot san pham chi thuoc 1 loai belongsTo()
    }
}
