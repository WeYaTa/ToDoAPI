<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name','background'];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'userID', 'userID');
    }
}
