<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    
    protected $fillable=['name','email','password','birth_date'];
    protected $guarded=['id','created_at','updated_at'];
}
