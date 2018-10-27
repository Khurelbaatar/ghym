<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'players';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lname', 'fname', 'country_id', 'number', 'birth', 'item_id', 'photo', 'point_id', 'category_id'];

        public function country(){
            return $this->belongsTo('App\Country');
    }
    
}
