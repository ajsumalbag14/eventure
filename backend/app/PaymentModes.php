<?php

namespace App;

use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class PaymentModes extends Model
{
	protected $fillable = [
        'name', 'description', 'third_party_url', 'event_id'
    ];

    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }
}
