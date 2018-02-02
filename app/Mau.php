<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mau extends Model
{
    const CREATED_AT ='m_taomoi';
    const UPDATED_AT ='m_capnhat';
    
    protected $table = 'mau';
    protected $fillable = ['m_ten', 'm_taomoi', 'm_capnhat', 'm_trangthai'];
    protected $guarded = ['m_ma'];
    protected $primaryKey = 'm_ma';
    protected $dates =['m_taomoi', 'm_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
