<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getpass extends Model
{
    use HasFactory;
    // public $timestamps = false;
    // protected $table = 'getpasses';
    protected $guarded = ['id'];
}
