<?php

return [
    'sections_name' => 'Pages',
    'section_name'  => 'Name',
    'permission'    => 'Manage Frontend',
    'actions'       => [
        'create' => 'Add',
        'edit'   => 'Edit',
        'save'   => 'Save',
    ],
    'messages' => [
        'updated' => 'The section has been updated successfully.',
        'deleted' => 'The section has been deleted successfully.',
    ],
    'sections' => [

        // ── HOME ────────────────────────────────────────────────────────────

        'banner' => [
            'attributes' => [
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
                'background'  => 'Background Image',
            ],
        ],

        'collections' => [
            'attributes' => [
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
            ],
        ],

        'featured' => [
            'attributes' => [
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
            ],
        ],

        'limited_edition' => [
            'attributes' => [
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
                'background'  => 'Background Image',
                'link'        => 'Link',
            ],
        ],

        'most_loved' => [
            'attributes' => [
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
            ],
        ],

        'testimonials' => [
            'attributes' => [
                'name'    => 'Customer Name',
                'role:en' => 'Role (English)',
                'role:ar' => 'Role (Arabic)',
                'text:en' => 'Review Text (English)',
                'text:ar' => 'Review Text (Arabic)',
                'avatar'  => 'Avatar Image',
                'stars'   => 'Rating (1–5)',
            ],
        ],

        'newsletter' => [
            'attributes' => [
                'label:en'    => 'Label (English)',
                'label:ar'    => 'Label (Arabic)',
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
                'button:en'   => 'Button Text (English)',
                'button:ar'   => 'Button Text (Arabic)',
            ],
        ],

        'chat_bot' => [
            'attributes' => [
                'code' => 'Embed Code',
            ],
        ],

        // ── ABOUT ───────────────────────────────────────────────────────────

        'about_hero' => [
            'attributes' => [
                'label:en' => 'Label (English)',
                'label:ar' => 'Label (Arabic)',
                'title:en' => 'Title (English)',
                'title:ar' => 'Title (Arabic)',
            ],
        ],

        'about_story' => [
            'attributes' => [
                'label:en'        => 'Label (English)',
                'label:ar'        => 'Label (Arabic)',
                'title:en'        => 'Title (English)',
                'title:ar'        => 'Title (Arabic)',
                'paragraph_1:en'  => 'Paragraph 1 (English)',
                'paragraph_1:ar'  => 'Paragraph 1 (Arabic)',
                'paragraph_2:en'  => 'Paragraph 2 (English)',
                'paragraph_2:ar'  => 'Paragraph 2 (Arabic)',
                'paragraph_3:en'  => 'Paragraph 3 (English)',
                'paragraph_3:ar'  => 'Paragraph 3 (Arabic)',
                'stat_1_number'   => 'Stat 1 — Number',
                'stat_1_label:en' => 'Stat 1 — Label (English)',
                'stat_1_label:ar' => 'Stat 1 — Label (Arabic)',
                'stat_1_icon'     => 'Stat 1 — Icon Class',
                'stat_2_number'   => 'Stat 2 — Number',
                'stat_2_label:en' => 'Stat 2 — Label (English)',
                'stat_2_label:ar' => 'Stat 2 — Label (Arabic)',
                'stat_2_icon'     => 'Stat 2 — Icon Class',
                'stat_3_number'   => 'Stat 3 — Number',
                'stat_3_label:en' => 'Stat 3 — Label (English)',
                'stat_3_label:ar' => 'Stat 3 — Label (Arabic)',
                'stat_3_icon'     => 'Stat 3 — Icon Class',
                'stat_4_number'   => 'Stat 4 — Number',
                'stat_4_label:en' => 'Stat 4 — Label (English)',
                'stat_4_label:ar' => 'Stat 4 — Label (Arabic)',
                'stat_4_icon'     => 'Stat 4 — Icon Class',
                'image_main'      => 'Main Image',
                'image_secondary' => 'Secondary Image',
            ],
        ],

        'about_values' => [
            'attributes' => [
                'label:en'    => 'Label (English)',
                'label:ar'    => 'Label (Arabic)',
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
            ],
        ],

        'about_value_items' => [
            'attributes' => [
                'icon'           => 'Icon Class',
                'title:en'       => 'Title (English)',
                'title:ar'       => 'Title (Arabic)',
                'description:en' => 'Description (English)',
                'description:ar' => 'Description (Arabic)',
            ],
        ],

        'about_experience' => [
            'attributes' => [
                'label:en'       => 'Label (English)',
                'label:ar'       => 'Label (Arabic)',
                'title:en'       => 'Title (English)',
                'title:ar'       => 'Title (Arabic)',
                'description:en' => 'Description (English)',
                'description:ar' => 'Description (Arabic)',
                'background'     => 'Background Image',
                'cta:en'         => 'Button Text (English)',
                'cta:ar'         => 'Button Text (Arabic)',
            ],
        ],

        'about_journey' => [
            'attributes' => [
                'label:en' => 'Label (English)',
                'label:ar' => 'Label (Arabic)',
                'title:en' => 'Title (English)',
                'title:ar' => 'Title (Arabic)',
            ],
        ],

        'about_journey_items' => [
            'attributes' => [
                'year'           => 'Year',
                'title:en'       => 'Title (English)',
                'title:ar'       => 'Title (Arabic)',
                'description:en' => 'Description (English)',
                'description:ar' => 'Description (Arabic)',
            ],
        ],

        'about_cta' => [
            'attributes' => [
                'label:en'    => 'Label (English)',
                'label:ar'    => 'Label (Arabic)',
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
            ],
        ],

        // ── CONTACT ─────────────────────────────────────────────────────────

        'contact_hero' => [
            'attributes' => [
                'label:en' => 'Label (English)',
                'label:ar' => 'Label (Arabic)',
                'title:en' => 'Title (English)',
                'title:ar' => 'Title (Arabic)',
            ],
        ],

        'contact_info_items' => [
            'attributes' => [
                'icon'     => 'Icon Class',
                'label:en' => 'Label (English)',
                'label:ar' => 'Label (Arabic)',
                'value:en' => 'Value (English)',
                'value:ar' => 'Value (Arabic)',
            ],
        ],

        'contact_form' => [
            'attributes' => [
                'label:en'       => 'Label (English)',
                'label:ar'       => 'Label (Arabic)',
                'title:en'       => 'Title (English)',
                'title:ar'       => 'Title (Arabic)',
                'description:en' => 'Description (English)',
                'description:ar' => 'Description (Arabic)',
            ],
        ],

        'contact_map' => [
            'attributes' => [
                'title'      => 'Store Name',
                'address:en' => 'Address (English)',
                'address:ar' => 'Address (Arabic)',
                'maps_url'   => 'Google Maps URL',
                'whatsapp'   => 'WhatsApp Number',
                'instagram'  => 'Instagram Handle',
            ],
        ],

        'contact_faq' => [
            'attributes' => [
                'label:en'    => 'Label (English)',
                'label:ar'    => 'Label (Arabic)',
                'title:en'    => 'Title (English)',
                'title:ar'    => 'Title (Arabic)',
                'subtitle:en' => 'Subtitle (English)',
                'subtitle:ar' => 'Subtitle (Arabic)',
            ],
        ],

        'contact_faq_items' => [
            'attributes' => [
                'question:en' => 'Question (English)',
                'question:ar' => 'Question (Arabic)',
                'answer:en'   => 'Answer (English)',
                'answer:ar'   => 'Answer (Arabic)',
            ],
        ],

        // ── FOOTER ──────────────────────────────────────────────────────────

        'footer' => [
            'attributes' => [
                'description:en' => 'Description (English)',
                'description:ar' => 'Description (Arabic)',
                'email'          => 'Email Address',
                'phone'          => 'Phone Number',
                'address:en'     => 'Address (English)',
                'address:ar'     => 'Address (Arabic)',
                'instagram'      => 'Instagram URL',
                'facebook'       => 'Facebook URL',
                'twitter'        => 'Twitter / X URL',
                'pinterest'      => 'Pinterest URL',
                'copyright:en'   => 'Copyright Text (English)',
                'copyright:ar'   => 'Copyright Text (Arabic)',
            ],
        ],

    ],
    'dialogs' => [
        'delete' => [
            'title'   => 'Warning!',
            'info'    => 'Are you sure you want to delete this section?',
            'confirm' => 'Delete',
            'cancel'  => 'Cancel',
        ],
    ],
];
