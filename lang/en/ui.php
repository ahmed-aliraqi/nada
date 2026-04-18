<?php

return [
    'sections_name' => 'Pages',
    'section_name' => 'Name',
    'permission' => 'Manage Frontend',
    'actions' => [
        'create' => 'Add',
        'edit' => 'Edit',
        'save' => 'Save',
    ],
    'messages' => [
        'updated' => 'The section has been updated successfully.',
        'deleted' => 'The section has been deleted successfully.',
    ],
    'sections' => [
        'banner' => [
            'attributes' => [
                'title:en' => 'Title (English)',
                'title:ar' => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
                'background' => 'Background Image',
            ],
        ],
        'collections' => [
            'attributes' => [
                'title:en' => 'Title (English)',
                'title:ar' => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
            ],
        ],
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the section ?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
    ],
];
