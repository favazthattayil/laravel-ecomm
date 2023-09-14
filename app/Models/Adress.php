<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
 protected $table= 'adress';

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'fullname',
        'email',
        'phone',
        'street',
        'city',
        'state',
        'pincode',
    ];



}
