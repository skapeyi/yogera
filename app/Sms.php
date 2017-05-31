<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    #For deleted records
    const STATUS_APPROVED = 1;
    const STATUS_NOT_APPROVED = 0;

    protected $fillable = [
      'type','messageId','from','to','message','status','aft_id','date'
    ];

    protected $attributes =[
      'approved' => self::STATUS_NOT_APPROVED,
      'discussion_id' => 0
    ];
}
