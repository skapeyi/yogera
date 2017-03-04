<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
  const STATUS_ACTIVE = 0;
  const STATUS_DELETED = 1;

  const APPROVED = 1;
  const NOT_APPROVED = 0;

  protected $fillable = [
    'title','description','banner_url','attachment_url','created_by','deleted','approved'
  ];

  protected $attributes = [
    'deleted' => self::STATUS_ACTIVE,
    'approved' => self::NOT_APPROVED
  ];
}
