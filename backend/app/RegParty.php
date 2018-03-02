<?php

namespace App;

use App\RegSolo;
use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class RegParty extends Model
{

	protected $fillable = [
        'name', 'email', 'phone', 'affiliation','event_id'
    ];

    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }

    public function regparty(){
    	$this->hasMany(RegSolo::class);
    }

}
