<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable=['title','sinopsis','author','gender'];
    protected $guarded=['id','created_at','updated_at'];
}
