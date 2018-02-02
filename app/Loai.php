<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    const CREATED_AT ='l_taomoi';
    const UPDATED_AT ='l_capnhat';
    
    protected $table = 'loai';
    protected $fillable = ['l_ten', 'l_taomoi', 'l_capnhat', 'l_trangthai'];
    protected $guarded = ['l_ma'];
    protected $primaryKey = 'l_ma';
    protected $dates =['l_taomoi', 'l_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function sanphams(){
    	return $this->hasMany('App\SanPham', 'l_ma', 'l_ma');
    	// mot loai co nhieu san pham hasMany()
    }
}
