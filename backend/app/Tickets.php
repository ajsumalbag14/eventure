<?php

namespace App;

use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{

	protected $fillable = [
        'name', 'email', 'fr_datetime', 'to_datetime','currency',
        'rate', 'slot', 'event_id'
    ];


    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }
}
