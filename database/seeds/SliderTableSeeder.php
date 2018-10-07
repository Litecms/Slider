<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    public function run()
    {
        DB::tableconfig('litecms.slider.slider.model.table'))->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'slider.slider.view',
                'name'      => 'View Slider',
            ],
            [
                'slug'      => 'slider.slider.create',
                'name'      => 'Create Slider',
            ],
            [
                'slug'      => 'slider.slider.edit',
                'name'      => 'Update Slider',
            ],
            [
                'slug'      => 'slider.slider.delete',
                'name'      => 'Delete Slider',
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
