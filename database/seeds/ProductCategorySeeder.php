<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = app('rinvex.categories.category')->create([
            'name' => 'Fashion',

            'description' => 'Fashion Categories',

            'children' => [
                [
                    'name' => 'Men',

                    'children' => [
                        [ 'name' => 'Clothes' ],
                        [ 'name' => 'Shoes' ],
                        [ 'name' => 'Caps' ],
                    ],
                ],

                [
                    'name' => 'Women',

                    'children' => [
                        [ 'name' => 'Clothes' ],
                        [ 'name' => 'Shoes' ],
                        [ 'name' => 'Dress' ],
                    ],
                ],

                [
                    'name' => 'Kids',

                    'children' => [
                        [ 'name' => 'Clothes' ],
                        [ 'name' => 'Shoes' ],
                        [ 'name' => 'Caps' ],
                    ],
                ],
            ],
        ]);

        $cosmetic = app('rinvex.categories.category')->create([
            'name' => 'Cosmetic',

            'description' => 'Cosmetic Categories',

            'children' => [
                [
                    'name' => 'Men',

                    'children' => [
                        [ 'name' => 'Face Cream' ],
                        [ 'name' => 'Shaver' ],
                    ],
                ],

                [
                    'name' => 'Women',

                    'children' => [
                        [ 'name' => 'Mask' ],
                        [ 'name' => 'Foundation' ],
                    ],
                ],
            ],
        ]);
    }
}
