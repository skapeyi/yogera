<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    const STATUS_ACTIVE = 0;
    const STATUS_DELETED = 1;

    const APPROVED = 1;
    const NOT_APPROVED = 0;

    protected $fillable = [
      'type','person','sector','organisation','region','gender','reason','approved','deleted','created_by'
    ];

    protected $attributes = [
      'deleted' => self::STATUS_ACTIVE,
      'approved' => self::NOT_APPROVED
    ];
}
