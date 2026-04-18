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

