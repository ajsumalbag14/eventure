<?php

namespace App;

use App\RegParty;
use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class RegSolo extends Model
{
	protected $fillable = [
        'name', 'gender', 'civil_status', 'birthdate','email', 'mobile',
        'affiliation', 'ticket_id', 'activity_1', 'activity_2','party_id',
        'event_id'
    ];


    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }

    public function regparty(){
    	$this->belongsTo(RegParty::class);
    }
}
