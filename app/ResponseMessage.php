<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponseMessage extends Model
{
    public function ContactMessage()
    {
    	return $this->belongsTo('App\ContactMessage');
    }
}
