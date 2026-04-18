<?php

return [
    'layout' => 'default',

    'layouts' => [
        'default' => [
            'sections' => [
                'social' => [
                    'fields' => [
                        'link' => AhmedAliraqi\Ui\Fields\Text::class,
                        'icon_class' => AhmedAliraqi\Ui\Fields\Text::class,
                    ],
                    'has_many_values' => true,
                ],
                'about' => [
                    'fields' => [
                        'title' => AhmedAliraqi\Ui\Fields\Text::class,
                        'read_more_url' => AhmedAliraqi\Ui\Fields\Text::class,
                        'content' => AhmedAliraqi\Ui\Fields\Editor::class,
                        'image' => AhmedAliraqi\Ui\Fields\File::class,
                    ],
                    'has_many_values' => false,
                ],
            ],
        ],
    ],
];
