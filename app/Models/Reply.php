<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = "replies";

    public $timestamps = false;

    public $primaryKey = "id";
}
