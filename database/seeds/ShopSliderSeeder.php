<?php

use Illuminate\Database\Seeder;
use Plank\Mediable\Media;

class ShopSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 1; $i < 8; $i++) {
	        \App\ShopSlider::create([
	        	'name' => 'New Arrival'. $i,
	        	'slug' => 'new-arrival' . $i,
	        	'tagline' => 'fashion 2017' . $i,
	        	'publication_status' => 1,
	        	'created_at' => new \DateTime(),
	        	'updated_at' => new \DateTime(),
	        ])->attachMedia(Media::find($i), 'image');
	    }
    }
}
