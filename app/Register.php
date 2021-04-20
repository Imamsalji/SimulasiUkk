<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{   
    protected $primaryKey = 'noreg';
    protected $fillable = ['nama','user_id','jk','alamat','agama','asal_sekolah','minat_jurusan'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    
}
