<?php

use Illuminate\Database\Seeder;
use Plank\Mediable\Media;

class LogoBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //logo brand 1
        $id1 = DB::table('logo_brands')->insertGetId([
            'name' => '3CE',
            'slug' => '3ce',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l1 = \App\LogoBrand::find($id1);

        $medial1 = Media::where('filename', '3ce')->first();
        $l1->attachMedia($medial1, 'image');

        //logo brand 2
        $id2 = DB::table('logo_brands')->insertGetId([
            'name' => 'apieu',
            'slug' => 'apieu',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l2 = \App\LogoBrand::find($id2);

        $medial2 = Media::where('filename', 'apieu')->first();
        $l2->attachMedia($medial2, 'image');

        //logo brand 3
        $id3 = DB::table('logo_brands')->insertGetId([
            'name' => 'Banila Co',
            'slug' => 'banilaco',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l3 = \App\LogoBrand::find($id3);

        $medial3 = Media::where('filename', 'banilaco')->first();
        $l3->attachMedia($medial3, 'image');


        //logo brand 4
        $id4 = DB::table('logo_brands')->insertGetId([
            'name' => 'Beauty People',
            'slug' => 'beautypeople',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l4 = \App\LogoBrand::find($id4);

        $medial4 = Media::where('filename', 'beautypeople')->first();
        $l4->attachMedia($medial4, 'image');

        //logo brand 5
        $id5 = DB::table('logo_brands')->insertGetId([
            'name' => 'cistya',
            'slug' => 'cistya',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l5 = \App\LogoBrand::find($id5);

        $medial5 = Media::where('filename', 'cistya')->first();
        $l5->attachMedia($medial5, 'image');


        //logo brand 6
        $id6 = DB::table('logo_brands')->insertGetId([
            'name' => 'clio',
            'slug' => 'clio',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l6 = \App\LogoBrand::find($id6);

        $medial6 = Media::where('filename', 'clio')->first();
        $l6->attachMedia($medial6, 'image');

        //logo brand 7
        $id7 = DB::table('logo_brands')->insertGetId([
            'name' => 'cosrx',
            'slug' => 'cosrx',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l7 = \App\LogoBrand::find($id7);

        $medial7 = Media::where('filename', 'cosrx')->first();
        $l7->attachMedia($medial7, 'image');

        //logo brand 8
        $id8 = DB::table('logo_brands')->insertGetId([
            'name' => 'Dewy Tree',
            'slug' => 'dewytree',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l8 = \App\LogoBrand::find($id8);

        $medial8 = Media::where('filename', 'dewytree')->first();
        $l8->attachMedia($medial8, 'image');

        //logo brand 9
        $id9 = DB::table('logo_brands')->insertGetId([
            'name' => 'Dr. Jart',
            'slug' => 'drjart',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l9 = \App\LogoBrand::find($id9);

        $medial9 = Media::where('filename', 'drjart')->first();
        $l9->attachMedia($medial9, 'image');


        //logo brand 10
        $id10 = DB::table('logo_brands')->insertGetId([
            'name' => 'etude',
            'slug' => 'etude',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l10 = \App\LogoBrand::find($id10);

        $medial10 = Media::where('filename', 'etude')->first();
        $l10->attachMedia($medial10, 'image');

        //logo brand 11
        $id11 = DB::table('logo_brands')->insertGetId([
            'name' => 'Face Shop',
            'slug' => 'faceshop',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l11 = \App\LogoBrand::find($id11);

        $medial11 = Media::where('filename', 'faceshop')->first();
        $l11->attachMedia($medial11, 'image');

        //logo brand 12
        $id12 = DB::table('logo_brands')->insertGetId([
            'name' => 'fila',
            'slug' => 'fila',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l12 = \App\LogoBrand::find($id12);

        $medial12 = Media::where('filename', 'fila')->first();
        $l12->attachMedia($medial12, 'image');

        //logo brand 13
        $id13 = DB::table('logo_brands')->insertGetId([
            'name' => 'holikaholika',
            'slug' => 'holikaholika',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l13 = \App\LogoBrand::find($id13);

        $medial13 = Media::where('filename', 'holikaholika')->first();
        $l13->attachMedia($medial13, 'image');

        //logo brand 14
        $id14 = DB::table('logo_brands')->insertGetId([
            'name' => 'innisfree',
            'slug' => 'innisfree',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l14 = \App\LogoBrand::find($id14);

        $medial14 = Media::where('filename', 'innisfree')->first();
        $l14->attachMedia($medial14, 'image');

        //logo brand 15
        $id15 = DB::table('logo_brands')->insertGetId([
            'name' => 'iope',
            'slug' => 'iope',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l15 = \App\LogoBrand::find($id15);

        $medial15 = Media::where('filename', 'iope')->first();
        $l15->attachMedia($medial15, 'image');

        //logo brand 16
        $id16 = DB::table('logo_brands')->insertGetId([
            'name' => 'its-skin',
            'slug' => 'its-skin',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l16 = \App\LogoBrand::find($id16);

        $medial16 = Media::where('filename', 'its-skin')->first();
        $l16->attachMedia($medial16, 'image');


        //logo brand 17
        $id17 = DB::table('logo_brands')->insertGetId([
            'name' => 'koelf',
            'slug' => 'koelf',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l17 = \App\LogoBrand::find($id17);

        $medial17 = Media::where('filename', 'koelf')->first();
        $l17->attachMedia($medial17, 'image');

        //logo brand 18
        $id18 = DB::table('logo_brands')->insertGetId([
            'name' => 'labiotte',
            'slug' => 'labiotte',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l18 = \App\LogoBrand::find($id18);

        $medial18 = Media::where('filename', 'labiotte')->first();
        $l18->attachMedia($medial18, 'image');

        //logo brand 19
        $id19 = DB::table('logo_brands')->insertGetId([
            'name' => 'laneige',
            'slug' => 'laneige',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l19 = \App\LogoBrand::find($id19);

        $medial19 = Media::where('filename', 'laneige')->first();
        $l19->attachMedia($medial19, 'image');

        //logo brand 20
        $id20 = DB::table('logo_brands')->insertGetId([
            'name' => 'leaders',
            'slug' => 'leaders',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l20 = \App\LogoBrand::find($id20);

        $medial20 = Media::where('filename', 'leaders')->first();
        $l20->attachMedia($medial20, 'image');

        //logo brand 21
        $id21 = DB::table('logo_brands')->insertGetId([
            'name' => 'mamonde',
            'slug' => 'mamonde',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l21 = \App\LogoBrand::find($id21);

        $medial21 = Media::where('filename', 'mamonde')->first();
        $l21->attachMedia($medial21, 'image');

        //logo brand 22
        $id22 = DB::table('logo_brands')->insertGetId([
            'name' => 'mediheal',
            'slug' => 'mediheal',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l22 = \App\LogoBrand::find($id22);

        $medial22 = Media::where('filename', 'mediheal')->first();
        $l22->attachMedia($medial22, 'image');

        //logo brand 23
        $id23 = DB::table('logo_brands')->insertGetId([
            'name' => 'missha',
            'slug' => 'missha',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l23 = \App\LogoBrand::find($id23);

        $medial23 = Media::where('filename', 'missha')->first();
        $l23->attachMedia($medial23, 'image');

        //logo brand 24
        $id24 = DB::table('logo_brands')->insertGetId([
            'name' => 'mizon',
            'slug' => 'mizon',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l24 = \App\LogoBrand::find($id24);

        $medial24 = Media::where('filename', 'mizon')->first();
        $l24->attachMedia($medial24, 'image');

        //logo brand 25
        $id25 = DB::table('logo_brands')->insertGetId([
            'name' => 'nature republic',
            'slug' => 'naturerepublic',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l25 = \App\LogoBrand::find($id25);

        $medial25 = Media::where('filename', 'naturerepublic')->first();
        $l25->attachMedia($medial25, 'image');

        //logo brand 26
        $id26 = DB::table('logo_brands')->insertGetId([
            'name' => 'petit fee',
            'slug' => 'petitfee',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l26 = \App\LogoBrand::find($id26);

        $medial26 = Media::where('filename', 'petitfee')->first();
        $l26->attachMedia($medial26, 'image');

        //logo brand 27
        $id27 = DB::table('logo_brands')->insertGetId([
            'name' => 'reebok',
            'slug' => 'reebok',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l27 = \App\LogoBrand::find($id27);

        $medial27 = Media::where('filename', 'reebok')->first();
        $l27->attachMedia($medial27, 'image');

        //logo brand 28
        $id28 = DB::table('logo_brands')->insertGetId([
            'name' => 'romand',
            'slug' => 'romand',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l28 = \App\LogoBrand::find($id28);

        $medial28 = Media::where('filename', 'romand')->first();
        $l28->attachMedia($medial28, 'image');

        //logo brand 29
        $id29 = DB::table('logo_brands')->insertGetId([
            'name' => 'secret key',
            'slug' => 'secretkey',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l29 = \App\LogoBrand::find($id29);

        $medial29 = Media::where('filename', 'secretkey')->first();
        $l29->attachMedia($medial29, 'image');

        //logo brand 30
        $id30 = DB::table('logo_brands')->insertGetId([
            'name' => 'skin food',
            'slug' => 'skinfood',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l30 = \App\LogoBrand::find($id30);

        $medial30 = Media::where('filename', 'skinfood')->first();
        $l30->attachMedia($medial30, 'image');

        //logo brand 31
        $id31 = DB::table('logo_brands')->insertGetId([
            'name' => 'swani coco',
            'slug' => 'swanicoco',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l31 = \App\LogoBrand::find($id31);

        $medial31 = Media::where('filename', 'swanicoco')->first();
        $l31->attachMedia($medial31, 'image');

        //logo brand 32
        $id32 = DB::table('logo_brands')->insertGetId([
            'name' => 'the saem',
            'slug' => 'thesaem',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l32 = \App\LogoBrand::find($id32);

        $medial32 = Media::where('filename', 'thesaem')->first();
        $l32->attachMedia($medial32, 'image');

        //logo brand 33
        $id33 = DB::table('logo_brands')->insertGetId([
            'name' => 'the yeon',
            'slug' => 'theyeon',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l33 = \App\LogoBrand::find($id33);

        $medial33 = Media::where('filename', 'theyeon')->first();
        $l33->attachMedia($medial33, 'image');

        //logo brand 34
        $id34 = DB::table('logo_brands')->insertGetId([
            'name' => 'tony moly',
            'slug' => 'tonymoly',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l34 = \App\LogoBrand::find($id34);

        $medial34 = Media::where('filename', 'tonymoly')->first();
        $l34->attachMedia($medial34, 'image');

        //logo brand 35
        $id35 = DB::table('logo_brands')->insertGetId([
            'name' => 'too cool for school',
            'slug' => 'toocoolforschool',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l35 = \App\LogoBrand::find($id35);

        $medial35 = Media::where('filename', 'toocoolforschool')->first();
        $l35->attachMedia($medial35, 'image');

        //logo brand 36
        $id36 = DB::table('logo_brands')->insertGetId([
            'name' => 'uniqlo',
            'slug' => 'uniqlo',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l36 = \App\LogoBrand::find($id36);

        $medial36 = Media::where('filename', 'uniqloo')->first();
        $l36->attachMedia($medial36, 'image');

        //logo brand 37
        $id37 = DB::table('logo_brands')->insertGetId([
            'name' => 'urban doll kiss',
            'slug' => 'urbandollkiss',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l37 = \App\LogoBrand::find($id37);

        $medial37 = Media::where('filename', 'urbandollkiss')->first();
        $l37->attachMedia($medial37, 'image');

        //logo brand 38
        $id38 = DB::table('logo_brands')->insertGetId([
            'name' => 'w lab',
            'slug' => 'wlab',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);

        $l38 = \App\LogoBrand::find($id38);

        $medial38 = Media::where('filename', 'wlab')->first();
        $l38->attachMedia($medial38, 'image');
    }
}
