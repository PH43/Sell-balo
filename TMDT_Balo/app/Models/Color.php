<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['color_name'];

    // public function product_color(){
    //     $this->hasMany(Product::class);
    // }

    public function product_detail(){
        $this->morphMany(ProductDetail::class, 'id');
    }
}
