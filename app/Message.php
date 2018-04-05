<?php

namespace sarahah;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
 
	protected $table = 'messages';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('sarahah\User');
    }

}
