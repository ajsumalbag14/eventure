<?php

namespace App;

use App\RegParty;
use App\RegSolo;
use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
	protected $fillable = [
        'event_id', 'party_id', 'solo_id', 'status', 'remarks'
    ];

    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }

    public function regparty(){
    	$this->belongsTo(RegParty::class);
    }
    
    public function regsolo(){
    	$this->belongsTo(RegSolo::class);
    }
}
