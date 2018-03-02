<?php

namespace App;

use App\RegParty;
use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class RegSolo extends Model
{
    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }

    public function regparty(){
    	$this->belongsTo(RegParty::class);
    }
}
