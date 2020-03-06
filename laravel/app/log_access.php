<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log_access extends Model
{
    //
    protected $table = 'log_access';
    protected $fillable = [
        'ip', 'agent', 'user_id', 'subject'
    ];
}