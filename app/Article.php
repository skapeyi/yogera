<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  const STATUS_ACTIVE = 0;
  const STATUS_DELETED = 1;

  const APPROVED = 1;
  const NOT_APPROVED = 0;
  protected $fillable = [
    'title','category','content','banner_url','attachment_url','external_url','approved','deleted','created_by'
  ];

  protected $attributes = [
    'deleted' => self::STATUS_ACTIVE,
    'approved' => self::NOT_APPROVED
  ];
}
