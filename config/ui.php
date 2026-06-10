<?php

use AhmedAliraqi\Ui\Fields\Email;
use AhmedAliraqi\Ui\Fields\File;
use AhmedAliraqi\Ui\Fields\Number;
use AhmedAliraqi\Ui\Fields\Text;
use AhmedAliraqi\Ui\Fields\Textarea;

return [
    'layout' => 'default',

    'layouts' => [
        'default' => [
            'sections' => [

                // ==================== HOME ====================

                'banner' => [
                    'fields' => [
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Text::class,
                        'subtitle:ar' => Text::class,
                        'background'  => File::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'home',
                ],

                'collections' => [
                    'fields' => [
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Text::class,
                        'subtitle:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'home',
                ],

                'featured' => [
                    'fields' => [
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Text::class,
                        'subtitle:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'home',
                ],

                'limited_edition' => [
                    'fields' => [
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Text::class,
                        'subtitle:ar' => Text::class,
                        'link'        => Text::class,
                        'background'  => File::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'home',
                ],

                'most_loved' => [
                    'fields' => [
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Text::class,
                        'subtitle:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'home',
                ],

                'testimonials' => [
                    'fields' => [
                        'name'    => Text::class,
                        'role:en' => Text::class,
                        'role:ar' => Text::class,
                        'text:en' => Textarea::class,
                        'text:ar' => Textarea::class,
                        'avatar'  => File::class,
                        'stars'   => Number::class,
                    ],
                    'has_many_values' => true,
                    'group'           => 'home',
                ],

                'newsletter' => [
                    'fields' => [
                        'label:en'    => Text::class,
                        'label:ar'    => Text::class,
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Textarea::class,
                        'subtitle:ar' => Textarea::class,
                        'button:en'   => Text::class,
                        'button:ar'   => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'home',
                ],

                'chat_bot' => [
                    'fields' => [
                        'code' => Textarea::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'home',
                ],

                // ==================== ABOUT ====================

                'about_hero' => [
                    'fields' => [
                        'label:en' => Text::class,
                        'label:ar' => Text::class,
                        'title:en' => Text::class,
                        'title:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'about',
                ],

                'about_story' => [
                    'fields' => [
                        'label:en'        => Text::class,
                        'label:ar'        => Text::class,
                        'title:en'        => Text::class,
                        'title:ar'        => Text::class,
                        'paragraph_1:en'  => Textarea::class,
                        'paragraph_1:ar'  => Textarea::class,
                        'paragraph_2:en'  => Textarea::class,
                        'paragraph_2:ar'  => Textarea::class,
                        'paragraph_3:en'  => Textarea::class,
                        'paragraph_3:ar'  => Textarea::class,
                        'stat_1_number'   => Text::class,
                        'stat_1_label:en' => Text::class,
                        'stat_1_label:ar' => Text::class,
                        'stat_1_icon'     => Text::class,
                        'stat_2_number'   => Text::class,
                        'stat_2_label:en' => Text::class,
                        'stat_2_label:ar' => Text::class,
                        'stat_2_icon'     => Text::class,
                        'stat_3_number'   => Text::class,
                        'stat_3_label:en' => Text::class,
                        'stat_3_label:ar' => Text::class,
                        'stat_3_icon'     => Text::class,
                        'stat_4_number'   => Text::class,
                        'stat_4_label:en' => Text::class,
                        'stat_4_label:ar' => Text::class,
                        'stat_4_icon'     => Text::class,
                        'image_main'      => File::class,
                        'image_secondary' => File::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'about',
                ],

                'about_values' => [
                    'fields' => [
                        'label:en'    => Text::class,
                        'label:ar'    => Text::class,
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Text::class,
                        'subtitle:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'about',
                ],

                'about_value_items' => [
                    'fields' => [
                        'icon'            => Text::class,
                        'title:en'        => Text::class,
                        'title:ar'        => Text::class,
                        'description:en'  => Textarea::class,
                        'description:ar'  => Textarea::class,
                    ],
                    'has_many_values' => true,
                    'group'           => 'about',
                ],

                'about_experience' => [
                    'fields' => [
                        'label:en'        => Text::class,
                        'label:ar'        => Text::class,
                        'title:en'        => Text::class,
                        'title:ar'        => Text::class,
                        'description:en'  => Textarea::class,
                        'description:ar'  => Textarea::class,
                        'background'      => File::class,
                        'cta:en'          => Text::class,
                        'cta:ar'          => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'about',
                ],

                'about_journey' => [
                    'fields' => [
                        'label:en' => Text::class,
                        'label:ar' => Text::class,
                        'title:en' => Text::class,
                        'title:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'about',
                ],

                'about_journey_items' => [
                    'fields' => [
                        'year'            => Text::class,
                        'title:en'        => Text::class,
                        'title:ar'        => Text::class,
                        'description:en'  => Textarea::class,
                        'description:ar'  => Textarea::class,
                    ],
                    'has_many_values' => true,
                    'group'           => 'about',
                ],

                'about_cta' => [
                    'fields' => [
                        'label:en'    => Text::class,
                        'label:ar'    => Text::class,
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Textarea::class,
                        'subtitle:ar' => Textarea::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'about',
                ],

                // ==================== CONTACT ====================

                'contact_hero' => [
                    'fields' => [
                        'label:en' => Text::class,
                        'label:ar' => Text::class,
                        'title:en' => Text::class,
                        'title:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'contact',
                ],

                'contact_info_items' => [
                    'fields' => [
                        'icon'     => Text::class,
                        'label:en' => Text::class,
                        'label:ar' => Text::class,
                        'value:en' => Textarea::class,
                        'value:ar' => Textarea::class,
                    ],
                    'has_many_values' => true,
                    'group'           => 'contact',
                ],

                'contact_form' => [
                    'fields' => [
                        'label:en'        => Text::class,
                        'label:ar'        => Text::class,
                        'title:en'        => Text::class,
                        'title:ar'        => Text::class,
                        'description:en'  => Textarea::class,
                        'description:ar'  => Textarea::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'contact',
                ],

                'contact_map' => [
                    'fields' => [
                        'title'      => Text::class,
                        'address:en' => Text::class,
                        'address:ar' => Text::class,
                        'maps_url'   => Text::class,
                        'whatsapp'   => Text::class,
                        'instagram'  => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'contact',
                ],

                'contact_faq' => [
                    'fields' => [
                        'label:en'    => Text::class,
                        'label:ar'    => Text::class,
                        'title:en'    => Text::class,
                        'title:ar'    => Text::class,
                        'subtitle:en' => Text::class,
                        'subtitle:ar' => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'contact',
                ],

                'contact_faq_items' => [
                    'fields' => [
                        'question:en' => Text::class,
                        'question:ar' => Text::class,
                        'answer:en'   => Textarea::class,
                        'answer:ar'   => Textarea::class,
                    ],
                    'has_many_values' => true,
                    'group'           => 'contact',
                ],

                // ==================== FOOTER ====================

                'footer' => [
                    'fields' => [
                        'description:en' => Textarea::class,
                        'description:ar' => Textarea::class,
                        'email'          => Email::class,
                        'phone'          => Text::class,
                        'address:en'     => Text::class,
                        'address:ar'     => Text::class,
                        'instagram'      => Text::class,
                        'facebook'       => Text::class,
                        'twitter'        => Text::class,
                        'pinterest'      => Text::class,
                        'copyright:en'   => Text::class,
                        'copyright:ar'   => Text::class,
                    ],
                    'has_many_values' => false,
                    'group'           => 'footer',
                ],

            ],
        ],
    ],
];
