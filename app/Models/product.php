<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Cast\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
protected $table = 'product';
    protected $guarded = [];


    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }



}
