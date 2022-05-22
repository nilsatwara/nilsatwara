<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    public function setNameAttribute($value){   //this is called mutator        //setNameAttribute called mutator 
$this->attributes['name'] = ucwords($value); //store value
    }
    public function getDobAttribute($value){ //this is called Accessor

        return date("d-M-Y",strtotime($value));

    }
}
