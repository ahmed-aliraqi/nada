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
