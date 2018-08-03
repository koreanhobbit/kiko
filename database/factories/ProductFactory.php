<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->unique()->word();
    $slug = str_slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
        'product_code' => $faker->word(),
        'sku' => $faker->word(),
        'description' => $faker->paragraph(6, true),
        'short_description' => $faker->text(200),
        'price' => $faker->numberBetween(20, 69),
        'regular_price' => $faker->numberBetween(20, 69),
        'sale_price' => $faker->numberBetween(20, 69),
        'date_on_sale_from' => $faker->date('Y-m-d'),
        'date_on_sale_to' => $faker->date('Y-m-d'),
        'manage_stock' => $faker->boolean(),
        'stock_quantity' => $faker->numberBetween(1, 100),
        'stock_status' => $faker->word(),
        'created_at' => new \DateTime(),
        'updated_at' => new \DateTime(),
    ];
});
