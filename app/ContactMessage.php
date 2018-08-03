<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
	protected $guarded = [];

	protected $dispatchesEvents = [
        'created' => \App\Events\NewContactMessage::class,
    ];

	public static function addNewContactMessage($request) 
	{	
		return static::create([
			'name' => $request->name,
			'email' => $request->email,
			'subject' => $request->subject,
			'message' => $request->message,
			'created_at' => new \DateTime(),
			'updated_at' => new \DateTime(),
		]);
	}

    public function responseMessage()
    {
    	return $this->hasOne('App\ResponseMessage', 'contact_message_id');
    }
}
