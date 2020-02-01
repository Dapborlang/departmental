<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    public function detail()
    {
        return $this->hasMany('App\ProductDetail')->orderBy('created_at');
    }
}
