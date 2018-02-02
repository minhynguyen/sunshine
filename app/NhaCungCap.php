<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    const CREATED_AT ='ncc_taomoi';
    const UPDATED_AT ='ncc_capnhat';
    
    protected $table = 'nhacungcap';
    protected $fillable = ['ncc_ten', 'ncc_daidien', 'ncc_diachi', 'ncc_dienthoai', 'ncc_email', 'ncc_taomoi', 'ncc_capnhat', 'ncc_trangthai', 'xx_ma'];
    protected $guarded = ['ncc_ma'];
    protected $primaryKey = 'ncc_ma';
    protected $dates =['ncc_taomoi', 'ncc_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
