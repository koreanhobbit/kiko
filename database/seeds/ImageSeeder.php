<?php

use Illuminate\Database\Seeder;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//slider image
    	for($i = 1 ; $i < 8 ; $i++) {
	        DB::table('media')->insert([
	        	'disk' => 'public', 
	        	'directory' => 'shop_frontend/images/',
	        	'filename' => 'master-slide-0' . $i,
	        	'extension' => 'jpg',
	        	'mime_type' => 'image/jpg',
	        	'aggregate_type' => 'image',
	        	'size' => 321,
	        	'created_at' => new \DateTime(),
	        	'updated_at' => new \DateTime(),
	        ]);
		}

		//featured product
    	for($i = 1 ; $i < 8 ; $i++) {
	        DB::table('media')->insert([
	        	'disk' => 'public', 
	        	'directory' => 'shop_frontend/images/',
	        	'filename' => 'item-0' . $i,
	        	'extension' => 'jpg',
	        	'mime_type' => 'image/jpg',
	        	'aggregate_type' => 'image',
	        	'size' => 321,
	        	'created_at' => new \DateTime(),
	        	'updated_at' => new \DateTime(),
	        ]);
		}

		//###########################//
		//######logobrand images#####//
		//###########################//
		
		DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => '3ce',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'apieu',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'banilaco',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'beautypeople',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'cistya',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'clio',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'cosrx',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'dewytree',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'drjart',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'etude',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'faceshop',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'fila',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'holikaholika',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'innisfree',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'iope',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'its-skin',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'koelf',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'labiotte',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'laneige',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'leaders',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'mamonde',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'mediheal',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'missha',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'mizon',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'naturerepublic',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'petitfee',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'reebok',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'romand',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'secretkey',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'skinfood',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'swanicoco',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'thesaem',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'theyeon',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'tonymoly',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'toocoolforschool',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'uniqloo',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'urbandollkiss',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);

	    DB::table('media')->insert([
        	'disk' => 'public', 
        	'directory' => 'frontend/images/brands',
        	'filename' => 'wlab',
        	'extension' => 'png',
        	'mime_type' => 'image/png',
        	'aggregate_type' => 'image',
        	'size' => 321,
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
	    ]);
    }
}
