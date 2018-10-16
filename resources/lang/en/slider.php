<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for slider in slider package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  slider module in slider package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Slider',
    'names'         => 'Sliders',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Sliders',
        'sub'   => 'Sliders',
        'list'  => 'List of sliders',
        'edit'  => 'Edit slider',
        'create'    => 'Create new slider'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['show' => 'Show','hide' => 'Hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'name'                       => 'Please enter name',
        'heading'                     => 'Please enter heading',
        'subheading'                     => 'Please enter subheading',
        'title3'                     => 'Please enter title3',
        'slug'                       => 'Please enter slug',
        'images'                     => 'Please add images',
        'status'                     => 'Please select status',
        'upload_folder'              => 'Please enter upload folder',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'name'                       => 'Name',
        'heading'                    => 'Heading',
        'subheading'                 => 'Subheading',
        'title3'                     => 'Title3',
        'slug'                       => 'Slug',
        'images'                     => 'Images',
        'status'                     => 'Status',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'heading'                     => ['name' => 'Heading', 'data-column' => 2, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Sliders',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
