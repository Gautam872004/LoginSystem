<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $table = "regestration";
    protected $primaryKey = "R_id";

    protected $fillable = ["name","email","password","phone_no"];
    public $timestamps = false;

}
