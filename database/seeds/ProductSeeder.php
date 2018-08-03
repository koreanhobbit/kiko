<?php

use Illuminate\Database\Seeder;
use Plank\Mediable\Media;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$colors = ['red', 'blue', 'orange', 'brown'];
    	$result = app('rinvex.categories.category')->withDepth()->having('depth', '=', 2)->get();
    	$id = [];
    	foreach ($result as $item) {
    		array_push($id, $item->id); 
    	}
    	
        //featured product
        for($i = 8; $i < 15; $i++) {
	        $product = \App\Product::create([
	        	'name' => 'Product' . $i,
		        'slug' => 'product' . $i,
		        'category_id' => rand($id[0], $id[12]),
		        'product_code' => 'productcode' . $i,
		        'sku' => 'pair',
		        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
		        'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		        'price' => rand(10, 100),
		        'color' => $colors[array_rand($colors)],
		        'regular_price' => rand(10, 100),
		        'sale_price' => rand(10, 100),
		        'date_on_sale_from' => new \DateTime(),
		        'date_on_sale_to' => new \DateTime(),
		        'manage_stock' => rand(1,2),
		        'stock_quantity' => rand(1, 10),
		        'stock_status' => 'available',
		        'created_at' => new \DateTime(),
		        'updated_at' => new \DateTime(),
	        ]);
	        //attach image
	        $product->attachMedia(Media::find($i), 'image');
	        //attach category
	        $product->attachCategories(rand($id[0], $id[12]));
	    }
    }
}
