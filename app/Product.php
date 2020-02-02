<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Product extends Model
{
    protected $guarded = ['id'];
    public function detail()
    {
        return $this->hasMany('App\ProductDetail')
        ->where("created_at",">", Carbon::now()->subMonths(6))
        ->orderBy('created_at','desc');
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
