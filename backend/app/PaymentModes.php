<?php

namespace App;

use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class PaymentModes extends Model
{
    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }
}
