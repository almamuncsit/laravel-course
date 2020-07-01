<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $table = 'address';

    protected $fillable = [ 'user_id', 'state', 'city', 'country'];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
