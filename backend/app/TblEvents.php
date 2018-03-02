<?php

namespace App;

use App\Apparels;
use App\Monitoring;
use App\PaymentModes;
use App\RegParty;
use App\RegSolo;
use App\Tickets;
use App\User;
use App\Workshops;
use Illuminate\Database\Eloquent\Model;

class TblEvents extends Model
{
    protected $fillable = [
        'name', 'description', 'fr_datetime', 'to_datetime','location',
        'poster', 'tags', 'facebook', 'twitter', 'instagram', 'website',
        'status','user_id'
    ];
    
    public function user(){
        $this->belongsTo(User::class);
    }

    public function tickets(){
        $this->hasMany(Tickets::class);
    }

    public function workshops(){
        $this->hasMany(Workshops::class);
    }

    public function apparels(){
        $this->hasMany(Apparels::class);
    }

    public function paymentmodes(){
        $this->hasMany(PaymentModes::class);
    }

    public function regparty(){
        $this->hasMany(RegParty::class);
    }

    public function regsolo(){
        $this->hasMany(RegSolo::class);
    }

    public function monitoring(){
        $this->hasMany(Monitoring::class);
    }
}
