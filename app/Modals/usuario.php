<?php

namespace App\Modals;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model{    
    protected $primaryKey = ['correo']; 
    public $incrementing = false;
}
