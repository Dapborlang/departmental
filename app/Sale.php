<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
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
