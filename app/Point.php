<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{

    protected $table = 'points';

    protected $primaryKey = 'id';

    protected $fillable = ['d1', 'd2', 'd3', 'd4', 'e1', 'e2', 'e3', 'e4', 'e5', 'e6', 'l1', 'l2', 't1', 'total', 'player_id', 'item_id', 'publish', 'rank'];

    public function player(){
        return $this->belongsTo('App\Player');
    }

    
    public function item(){
        return $this->belongsTo('App\Item');
    }
}
