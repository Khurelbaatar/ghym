<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'countries';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'flag'];

        public function player(){
            return $this->belongsTo('App\Player');
    }
}
