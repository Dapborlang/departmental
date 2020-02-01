<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $guarded = ['id'];

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
