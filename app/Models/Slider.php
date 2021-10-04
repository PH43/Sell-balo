<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'slider_name', 'slider_image'
    ];
    protected $primaryKey = 'slider_id';
 	protected $table = 'sliders';
}
