<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['size_name'];

    // public function product_size(){
    //     $this->hasMany('App\Models\ProductDetail','size_id','id');
    // }

    public function product_detail(){
        $this->morphMany(ProductDetail::class, 'id');
    }
}
