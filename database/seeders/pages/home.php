<?php

use AhmedAliraqi\Ui\Facades\Ui;

Ui::section('banner')
    ->setName('Banner')
    ->setFields([
        'title:en' => 'Every scent has a story',
        'title:ar' => 'كل رائحة لها قصة',
        'subtitle:en' => 'Luxury perfumes crafted to become part of your identity',
        'subtitle:ar' => 'عطور فاخرة صُممت لتكون جزءًا من هويتك',
        'background' => public_path('/images/placeholder/33-1920x1080.jpg'),
    ])->build();


Ui::section('collections')
    ->setName('Collections')
    ->setFields([
        'title:en' => 'Explore Our World',
        'title:ar' => 'اكتشف عالمنا',
        'subtitle:en' => 'Four carefully curated categories to satisfy every desire',
        'subtitle:ar' => 'أربع فئات مختارة بعناية لتلبية كل رغبة',
    ])->build();

Ui::section('featured')
    ->setName('Featured')
    ->setFields([
        'title:en' => 'Featured Collections',
        'title:ar' => 'المجموعات المميزة',
        'subtitle:en' => 'Handpicked selections from our finest range',
        'subtitle:ar' => 'اختيارات مختارة من أفضل مجموعاتنا',
    ])->build();

Ui::section('limited_edition')
    ->setName('Limited Edition')
    ->setFields([
        'title:en' => 'Midnight Jasmine Collection',
        'title:ar' => 'مجموعة ياسمين منتصف الليل',
        'subtitle:en' => 'An exclusive release of only 500 bottles worldwide. A mesmerizing blend of jasmine, sandalwood, and rare vanilla absolute.',
        'subtitle:ar' => 'إصدار حصري من 500 زجاجة فقط في جميع أنحاء العالم. مزيج ساحر من الياسمين، خشب الصندل، وفانيليا المطلقة النادرة.',
        'background' => public_path('/images/placeholder/839-800x600.jpg'),
        'link' => '/shop',
    ])->build();

Ui::section('most_loved')
    ->setName('Most Loved')
    ->setFields([
        'title:en' => 'Best Sellers',
        'title:ar' => 'الأكثر مبيعًا',
        'subtitle:en' => 'The pieces our clients can\'t stop buying',
        'subtitle:ar' => 'القطع التي لا يستطيع عملاؤنا التوقف عن شرائها',
    ])->build();

Ui::section('chat_bot')
    ->setName('Chat Bot')
    ->setFields([
        'code' => '',
    ])->build();

Ui::section('testimonials')
    ->setName('Testimonials')
    ->setFields([
        'name'    => 'Sophia M.',
        'role:en' => 'Verified Buyer',
        'role:ar' => 'مشترية موثقة',
        'text:en' => 'The Rose Noir perfume is absolutely divine. It lasts all day and I receive compliments everywhere I go. Truly a luxury experience.',
        'text:ar' => 'عطر روز نوار رائع تماماً. يدوم طوال اليوم وأتلقى المجاملات في كل مكان أذهب إليه. تجربة فاخرة حقيقية.',
        'stars'   => 5,
    ])->build();

Ui::section('testimonials')
    ->setName('Testimonials')
    ->setFields([
        'name'    => 'Layla K.',
        'role:en' => 'Verified Buyer',
        'role:ar' => 'مشترية موثقة',
        'text:en' => "I've tried many high-end brands, but the oriental collection is on another level. The packaging alone is a work of art.",
        'text:ar' => 'جربت كثيراً من العلامات التجارية الراقية، لكن المجموعة الشرقية على مستوى آخر. التغليف وحده تحفة فنية.',
        'stars'   => 5,
    ])->build();

Ui::section('testimonials')
    ->setName('Testimonials')
    ->setFields([
        'name'    => 'Emma R.',
        'role:en' => 'Verified Buyer',
        'role:ar' => 'مشترية موثقة',
        'text:en' => 'Their niche collection introduced me to fragrances I never knew existed. A true gem of a store.',
        'text:ar' => 'مجموعتهم المتخصصة عرّفتني على عطور لم أكن أعلم بوجودها. متجر جوهرة حقيقية.',
        'stars'   => 5,
    ])->build();

Ui::section('newsletter')
    ->setName('Newsletter')
    ->setFields([
        'label:en'    => 'Stay Connected',
        'label:ar'    => 'ابقَ على تواصل',
        'title:en'    => 'Join the Beauty Circle',
        'title:ar'    => 'انضم إلى دائرة الجمال',
        'subtitle:en' => 'Be the first to know about new arrivals, exclusive offers, and beauty secrets.',
        'subtitle:ar' => 'كن أول من يعرف عن الوافدين الجدد والعروض الحصرية وأسرار الجمال.',
        'button:en'   => 'Subscribe',
        'button:ar'   => 'اشترك',
    ])->build();

