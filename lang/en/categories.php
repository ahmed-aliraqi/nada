<?php

return [
    'singular' => 'Category',
    'plural' => 'Categories',
    'empty' => 'There are no categories yet.',
    'count' => 'Categories count.',
    'search' => 'Search',
    'select' => 'Select Category',
    'permission' => 'Manage categories',
    'trashed' => 'Trashed categories',
    'perPage' => 'Results per page',
    'filter' => 'Search for category',
    'actions' => [
        'list' => 'List all',
        'create' => 'Create a new category',
        'show' => 'Show category',
        'edit' => 'Edit category',
        'delete' => 'Delete category',
        'restore' => 'Restore',
        'forceDelete' => 'Delete Forever',
        'options' => 'Options',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The category has been created successfully.',
        'updated' => 'The category has been updated successfully.',
        'deleted' => 'The category has been deleted successfully.',
        'restored' => 'The category has been restored successfully.',
    ],
    'attributes' => [
        'name' => 'Categories name',
        '%name%' => 'Categories name',
        'image' => 'Image',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the category ?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'restore' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to restore the category ?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ],
        'forceDelete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the category forever ?',
            'confirm' => 'Delete Forever',
            'cancel' => 'Cancel',
        ],
    ],
];
