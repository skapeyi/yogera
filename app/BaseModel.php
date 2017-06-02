<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    const STATUS_APPROVED = 1;
    const STATUS_NOT_APPROVED = 0;

    const STATUS_ACTIVE = 0;
    const STATUS_DELETED = 1
}
