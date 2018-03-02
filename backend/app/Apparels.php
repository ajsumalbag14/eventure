<?php

namespace App;

use App\TblEvents;
use Illuminate\Database\Eloquent\Model;

class Apparels extends Model
{
	protected $fillable = [
        'name', 'size', 'slot', 'event_id'
    ];

    public function tblevents(){
    	$this->belongsTo(TblEvents::class);
    }
}
