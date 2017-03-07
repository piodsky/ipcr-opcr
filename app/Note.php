<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['title','body','distribution','Q1','E2','T3','ipcr_id'];


    public function ipcr()
    {
    	return $this->belongsTo(ipcr::class);
    }
}
