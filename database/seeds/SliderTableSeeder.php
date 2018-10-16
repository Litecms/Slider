<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.slider.slider.model.table'))->insert([
            [
                'id'            => '1',
                'user_id'       => '1',
                'user_type'     => 'App\\User',
                'name'          => 'Music & Arts',
                'heading'       => 'Music Bands',
                'subheading'    => 'Music Bands',
                'slug'          => 'music-arts',
                'images'        => '[{"title":"Chicago","caption":"Thank you, Chicago!","url":"Chicago","desc":null,"folder":"2018\\/10\\/16\\/075556818\\/images","time":"2018-10-16 07:56:25","path":"slider\\/slider\\/2018\\/10\\/16\\/075556818\\/images\\/chicago.jpg","file":"chicago.jpg"},{"title":"Los Angeles","caption":"LA is always so much fun!","url":"La","desc":null,"folder":"2018\\/10\\/16\\/075556818\\/images","time":"2018-10-16 07:56:25","path":"slider\\/slider\\/2018\\/10\\/16\\/075556818\\/images\\/la.jpg","file":"la.jpg"},{"title":"New York","caption":"We love the Big Apple!","url":"Ny","desc":null,"folder":"2018\\/10\\/16\\/075556818\\/images","time":"2018-10-16 07:56:25","path":"slider\\/slider\\/2018\\/10\\/16\\/075556818\\/images\\/ny.jpg","file":"ny.jpg"}]',
                'status'        => 'Show',
                'upload_folder' => null,
                'deleted_at'    => null,
                'created_at'    => '2018-10-16 07:56:28',
                'updated_at'    => '2018-10-16 08:55:18',
            ],

        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'slider.slider.view',
                'name' => 'View Slider',
            ],
            [
                'slug' => 'slider.slider.create',
                'name' => 'Create Slider',
            ],
            [
                'slug' => 'slider.slider.edit',
                'name' => 'Update Slider',
            ],
            [
                'slug' => 'slider.slider.delete',
                'name' => 'Delete Slider',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/slider/slider',
                'name'        => 'Slider',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 4,
                'key'         => null,
                'url'         => 'sliders',
                'name'        => 'Slider',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 5,
                'key'         => null,
                'url'         => 'sliders',
                'name'        => 'Slider',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'pacakge'   => 'Slider',
        'module'    => 'Slider',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'slider.slider.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
