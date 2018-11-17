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
}
