<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['ActualAccomplishments','Q1','E2','T3','A4','Ave','ipcr_id','Remarks'];


    public function ipcr()
    {
    	return $this->belongsTo(ipcr::class);
    }
}
