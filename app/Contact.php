<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Contact extends Model
{
    //
    protected $table = 'contacts';
    public $primaryKey = 'contactid';
    public $timestamps = true;
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function scopeSearch($query, $s){

        return $query->where('contactname','like','%'.$s.'%');
           // ->orWhere('contactnumber','like','%'.$s.'%')
           // ->orWhere('email','like','%'.$s.'%')
          //  ->orWhere('address','like','%'.$s.'%');
            
    }
}
