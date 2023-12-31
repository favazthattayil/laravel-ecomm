<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;
    protected $table= 'cart';

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',

    ];



    public function products(){
        return $this->belongsTo(product::class,'product_id','id');
    }

}

