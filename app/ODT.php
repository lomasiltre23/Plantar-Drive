<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ODT extends Model
{
    protected $table = 'odts';
    public function cliente()
    {
    	return $this->belongsTo('App\Client');
    }
}
