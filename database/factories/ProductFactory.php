<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $listCategoriId = Category::pluck('id');
        return [
            'product_name' => $this->faker->name(),
            'category_id'=>$this->faker->randomElement($listCategoriId),
            'product_desc'=>$this->faker->text(),
            'product_content'=>$this->faker->text(),
            'product_price'=>rand(300,500000),
            'product_content'=>$this->faker->text(),
            'product_image'=>$this->faker->text(),
        ];
    }
}
