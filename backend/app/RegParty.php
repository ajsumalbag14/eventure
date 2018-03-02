<?php

namespace App;

use App\RegSolo;
use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class RegParty extends Model
{
    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }

    public function regparty(){
    	$this->hasMany(RegSolo::class);
    }

}
