<?php

use Illuminate\Database\Seeder;

class SiteMediaSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_media_socials')->insert([
        	'name' => 'email',
        	'slug' => 'email',
        	'icon' => 'fa-envelope',
        	'link' => 'admin@kioskorea.com',
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
        ]);

        DB::table('site_media_socials')->insert([
        	'name' => 'facebook',
        	'slug' => 'facebook',
        	'icon' => 'fa-facebook',
        	'link' => 'https://www.facebook.com/kioskorea/',
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
        ]);

        DB::table('site_media_socials')->insert([
        	'name' => 'instagram',
        	'slug' => 'instagram',
        	'icon' => 'fa-instagram',
        	'link' => 'https://www.instagram.com/kioskorea',
        	'created_at' => new \DateTime(),
        	'updated_at' => new \DateTime(),
        ]);
    }
}
