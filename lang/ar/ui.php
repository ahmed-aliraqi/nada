<?php

return [
    'sections_name' => 'الصفحات',
    'section_name'  => 'الاسم',
    'permission'    => 'إدارة الواجهة الأمامية',
    'actions'       => [
        'create' => 'إضافة',
        'edit'   => 'تعديل',
        'save'   => 'حفظ',
    ],
    'messages' => [
        'updated' => 'تم تحديث القسم بنجاح.',
        'deleted' => 'تم حذف القسم بنجاح.',
    ],
    'sections' => [

        // ── HOME ────────────────────────────────────────────────────────────

        'banner' => [
            'attributes' => [
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
                'background'  => 'صورة الخلفية',
            ],
        ],

        'collections' => [
            'attributes' => [
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
            ],
        ],

        'featured' => [
            'attributes' => [
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
            ],
        ],

        'limited_edition' => [
            'attributes' => [
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
                'background'  => 'صورة الخلفية',
                'link'        => 'الرابط',
            ],
        ],

        'most_loved' => [
            'attributes' => [
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
            ],
        ],

        'testimonials' => [
            'attributes' => [
                'name'    => 'اسم العميل',
                'role:en' => 'المسمى الوظيفي (إنجليزي)',
                'role:ar' => 'المسمى الوظيفي (عربي)',
                'text:en' => 'نص التقييم (إنجليزي)',
                'text:ar' => 'نص التقييم (عربي)',
                'avatar'  => 'صورة الشخص',
                'stars'   => 'التقييم (1–5)',
            ],
        ],

        'newsletter' => [
            'attributes' => [
                'label:en'    => 'الوسم (إنجليزي)',
                'label:ar'    => 'الوسم (عربي)',
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
                'button:en'   => 'نص الزر (إنجليزي)',
                'button:ar'   => 'نص الزر (عربي)',
            ],
        ],

        'chat_bot' => [
            'attributes' => [
                'code' => 'كود التضمين',
            ],
        ],

        // ── ABOUT ───────────────────────────────────────────────────────────

        'about_hero' => [
            'attributes' => [
                'label:en' => 'الوسم (إنجليزي)',
                'label:ar' => 'الوسم (عربي)',
                'title:en' => 'العنوان (إنجليزي)',
                'title:ar' => 'العنوان (عربي)',
            ],
        ],

        'about_story' => [
            'attributes' => [
                'label:en'        => 'الوسم (إنجليزي)',
                'label:ar'        => 'الوسم (عربي)',
                'title:en'        => 'العنوان (إنجليزي)',
                'title:ar'        => 'العنوان (عربي)',
                'paragraph_1:en'  => 'الفقرة الأولى (إنجليزي)',
                'paragraph_1:ar'  => 'الفقرة الأولى (عربي)',
                'paragraph_2:en'  => 'الفقرة الثانية (إنجليزي)',
                'paragraph_2:ar'  => 'الفقرة الثانية (عربي)',
                'paragraph_3:en'  => 'الفقرة الثالثة (إنجليزي)',
                'paragraph_3:ar'  => 'الفقرة الثالثة (عربي)',
                'stat_1_number'   => 'الإحصاء 1 — الرقم',
                'stat_1_label:en' => 'الإحصاء 1 — التسمية (إنجليزي)',
                'stat_1_label:ar' => 'الإحصاء 1 — التسمية (عربي)',
                'stat_1_icon'     => 'الإحصاء 1 — كلاس الأيقونة',
                'stat_2_number'   => 'الإحصاء 2 — الرقم',
                'stat_2_label:en' => 'الإحصاء 2 — التسمية (إنجليزي)',
                'stat_2_label:ar' => 'الإحصاء 2 — التسمية (عربي)',
                'stat_2_icon'     => 'الإحصاء 2 — كلاس الأيقونة',
                'stat_3_number'   => 'الإحصاء 3 — الرقم',
                'stat_3_label:en' => 'الإحصاء 3 — التسمية (إنجليزي)',
                'stat_3_label:ar' => 'الإحصاء 3 — التسمية (عربي)',
                'stat_3_icon'     => 'الإحصاء 3 — كلاس الأيقونة',
                'stat_4_number'   => 'الإحصاء 4 — الرقم',
                'stat_4_label:en' => 'الإحصاء 4 — التسمية (إنجليزي)',
                'stat_4_label:ar' => 'الإحصاء 4 — التسمية (عربي)',
                'stat_4_icon'     => 'الإحصاء 4 — كلاس الأيقونة',
                'image_main'      => 'الصورة الرئيسية',
                'image_secondary' => 'الصورة الثانوية',
            ],
        ],

        'about_values' => [
            'attributes' => [
                'label:en'    => 'الوسم (إنجليزي)',
                'label:ar'    => 'الوسم (عربي)',
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
            ],
        ],

        'about_value_items' => [
            'attributes' => [
                'icon'           => 'كلاس الأيقونة',
                'title:en'       => 'العنوان (إنجليزي)',
                'title:ar'       => 'العنوان (عربي)',
                'description:en' => 'الوصف (إنجليزي)',
                'description:ar' => 'الوصف (عربي)',
            ],
        ],

        'about_experience' => [
            'attributes' => [
                'label:en'       => 'الوسم (إنجليزي)',
                'label:ar'       => 'الوسم (عربي)',
                'title:en'       => 'العنوان (إنجليزي)',
                'title:ar'       => 'العنوان (عربي)',
                'description:en' => 'الوصف (إنجليزي)',
                'description:ar' => 'الوصف (عربي)',
                'background'     => 'صورة الخلفية',
                'cta:en'         => 'نص الزر (إنجليزي)',
                'cta:ar'         => 'نص الزر (عربي)',
            ],
        ],

        'about_journey' => [
            'attributes' => [
                'label:en' => 'الوسم (إنجليزي)',
                'label:ar' => 'الوسم (عربي)',
                'title:en' => 'العنوان (إنجليزي)',
                'title:ar' => 'العنوان (عربي)',
            ],
        ],

        'about_journey_items' => [
            'attributes' => [
                'year'           => 'السنة',
                'title:en'       => 'العنوان (إنجليزي)',
                'title:ar'       => 'العنوان (عربي)',
                'description:en' => 'الوصف (إنجليزي)',
                'description:ar' => 'الوصف (عربي)',
            ],
        ],

        'about_cta' => [
            'attributes' => [
                'label:en'    => 'الوسم (إنجليزي)',
                'label:ar'    => 'الوسم (عربي)',
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
            ],
        ],

        // ── CONTACT ─────────────────────────────────────────────────────────

        'contact_hero' => [
            'attributes' => [
                'label:en' => 'الوسم (إنجليزي)',
                'label:ar' => 'الوسم (عربي)',
                'title:en' => 'العنوان (إنجليزي)',
                'title:ar' => 'العنوان (عربي)',
            ],
        ],

        'contact_info_items' => [
            'attributes' => [
                'icon'     => 'كلاس الأيقونة',
                'label:en' => 'التسمية (إنجليزي)',
                'label:ar' => 'التسمية (عربي)',
                'value:en' => 'القيمة (إنجليزي)',
                'value:ar' => 'القيمة (عربي)',
            ],
        ],

        'contact_form' => [
            'attributes' => [
                'label:en'       => 'الوسم (إنجليزي)',
                'label:ar'       => 'الوسم (عربي)',
                'title:en'       => 'العنوان (إنجليزي)',
                'title:ar'       => 'العنوان (عربي)',
                'description:en' => 'الوصف (إنجليزي)',
                'description:ar' => 'الوصف (عربي)',
            ],
        ],

        'contact_map' => [
            'attributes' => [
                'title'      => 'اسم المتجر',
                'address:en' => 'العنوان (إنجليزي)',
                'address:ar' => 'العنوان (عربي)',
                'maps_url'   => 'رابط خرائط جوجل',
                'whatsapp'   => 'رقم واتساب',
                'instagram'  => 'حساب إنستقرام',
            ],
        ],

        'contact_faq' => [
            'attributes' => [
                'label:en'    => 'الوسم (إنجليزي)',
                'label:ar'    => 'الوسم (عربي)',
                'title:en'    => 'العنوان (إنجليزي)',
                'title:ar'    => 'العنوان (عربي)',
                'subtitle:en' => 'العنوان الفرعي (إنجليزي)',
                'subtitle:ar' => 'العنوان الفرعي (عربي)',
            ],
        ],

        'contact_faq_items' => [
            'attributes' => [
                'question:en' => 'السؤال (إنجليزي)',
                'question:ar' => 'السؤال (عربي)',
                'answer:en'   => 'الجواب (إنجليزي)',
                'answer:ar'   => 'الجواب (عربي)',
            ],
        ],

        // ── FOOTER ──────────────────────────────────────────────────────────

        'footer' => [
            'attributes' => [
                'description:en' => 'الوصف (إنجليزي)',
                'description:ar' => 'الوصف (عربي)',
                'email'          => 'البريد الإلكتروني',
                'phone'          => 'رقم الهاتف',
                'address:en'     => 'العنوان (إنجليزي)',
                'address:ar'     => 'العنوان (عربي)',
                'instagram'      => 'رابط إنستقرام',
                'facebook'       => 'رابط فيسبوك',
                'twitter'        => 'رابط تويتر / X',
                'pinterest'      => 'رابط بينتريست',
                'copyright:en'   => 'نص حقوق النشر (إنجليزي)',
                'copyright:ar'   => 'نص حقوق النشر (عربي)',
            ],
        ],

    ],
    'dialogs' => [
        'delete' => [
            'title'   => 'تحذير!',
            'info'    => 'هل أنت متأكد من حذف هذا القسم؟',
            'confirm' => 'حذف',
            'cancel'  => 'إلغاء',
        ],
    ],
];
