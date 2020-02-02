<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function sale()
    {
        return $this->hasMany('App\Sale');
    }

    public function getCreatedAtAttribute($value)
    {
    	if($value!='')
    	{
    		$date=date_create($value);
        	return date_format($date,"d/m/Y h:i");
    	}
    	return '';
    	
    }
}
