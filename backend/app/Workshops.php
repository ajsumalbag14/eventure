<?php

namespace App;

use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class Workshops extends Model
{

	protected $fillable = [
        'name', 'description', 'facilitator', 'slot','event_id'
    ];


    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }
}
