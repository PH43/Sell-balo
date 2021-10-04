<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'product_name',
        'category_id',
        'product_desc',
        'product_content',
        'product_price',
        'product_image'
    ];

    public function category(){
        $this->belongsToMany(Category::class);
    }

    // public function color(){
    //     $this->belongsToMany(Color::class);
    // }

    // public function size(){
    //     $this->belongsToMany(Size::class);
    // }

    public function product_detail(){
        $this->morphMany(ProductDetail::class, 'id');
    }

}
