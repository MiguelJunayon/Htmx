<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imgUrl' => fake()->randomElement(['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8gaOtoBUjwNs237ssMh0Y0iaalqm-3bWJsA&s','https://i5.walmartimages.com/seo/Restored-Apple-iPhone-11-Pro-Max-256GB-Space-Gray-Fully-Unlocked-Refurbished_a96d32bf-e73d-4965-a8f6-270d866af435.dc1da6f963ccd1b923daa626dd7e08b2.jpeg','https://www.otterbox.asia/dw/image/v2/BGMS_PRD/on/demandware.static/-/Sites-masterCatalog/default/dw998e3bd6/productimages/dis/cases-screen-protection/see-clear-iphpm21/see-clear-iphpm21-blackcrystal-d-split.jpg?sw=800&sh=800','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR83xS64tFrpjoe_51ktGrU1msufLjgmgwT2Q&ss','https://static-01.daraz.com.bd/p/7b4dcc406f37e0e00eedc152e62af861.jpg_750x750.jpg_.webp','https://doto.vtexassets.com/arquivos/ids/315601-800-800?v=638348765843300000&width=800&height=800&aspect=true']),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' =>fake()->numberBetween(5000,10000)
        ];
    }
}
