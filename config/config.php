<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'slider',

    /*
     * Modules.
     */
    'modules'   => ['slider'],

    
    'slider'       => [
        'model' => [
            'model'                 => \Litecms\Slider\Models\Slider::class,
            'table'                 => 'sliders',
            'presenter'             => \Litecms\Slider\Repositories\Presenter\SliderPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'user_id',  'user_type',  'name',  'title1',  'title2',  'title3',  'slug',  'images',  'status',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'slider/slider',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Slider',
            'module'    => 'Slider',
        ],

    ],
];
