<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_name'
    ];

    public function categories() {
        return $this->hasMany(Category::class);
     }

     public function childrenCategories() {
        return $this->hasMany(Category::class)->with('categories');
     }
     
     public function product() {
        return $this->hasMany(Product::class);
     }

}
