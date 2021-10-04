<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['quantity'];

    public function productID(){
        $this->morphTo();
    }

    // public function colorID(){
    //     $this->belongsToMany(Color::class);
    // }

    // public function sizeID(){
    //     $this->belongsToMany('App\Models\Size','id', 'id');
    // }
}
