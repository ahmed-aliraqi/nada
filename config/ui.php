<?php

return [
    'layout' => 'default',

    'layouts' => [
        'default' => [
            'sections' => [
                'banner' => [
                    'fields' => [
                        'title:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'title:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'background' => \AhmedAliraqi\Ui\Fields\File::class,
                    ],
                    'has_many_values' => false,
                    'group' => 'home',
                ],
                'collections' => [
                    'fields' => [
                        'title:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'title:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                    ],
                    'has_many_values' => false,
                    'group' => 'home',
                ],
                'featured' => [
                    'fields' => [
                        'title:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'title:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                    ],
                    'has_many_values' => false,
                    'group' => 'home',
                ],
                'limited_edition' => [
                    'fields' => [
                        'title:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'title:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'link' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'background' => \AhmedAliraqi\Ui\Fields\File::class,
                    ],
                    'has_many_values' => false,
                    'group' => 'home',
                ],
                'most_loved' => [
                    'fields' => [
                        'title:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'title:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:en' => \AhmedAliraqi\Ui\Fields\Text::class,
                        'subtitle:ar' => \AhmedAliraqi\Ui\Fields\Text::class,
                    ],
                    'has_many_values' => false,
                    'group' => 'home',
                ],
            ],
        ],
    ],
];
