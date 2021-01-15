<?php

namespace App\Modals;

use Illuminate\Database\Eloquent\Model;

class libro extends Model{ 
    protected $primaryKey = ['ISBN'];
    public $incrementing = false;
}
