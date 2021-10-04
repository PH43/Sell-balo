<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $listColorId = Color::pluck('id');
        $listSizeiId = Size::pluck('id');
        $listProductiId = Product::pluck('id');
        return [
            'color_id'=>$this->faker->randomElement($listColorId),
            'size_id'=>$this->faker->randomElement($listSizeiId),
            'product_id'=>$this->faker->randomElement($listProductiId),
            'quantity'=>rand(5,50)
        ];
    }
}
