<?php

namespace App;

use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class Apparels extends Model
{
    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }
}
