<?php

use AhmedAliraqi\Ui\Facades\Ui;

Ui::section('footer')
    ->setName('Footer')
    ->setFields([
        'description:en' => 'A sanctuary of luxury beauty and fragrances. We curate the finest products from around the world for the discerning individual.',
        'description:ar' => 'ملاذ للجمال الفاخر والعطور. نختار أفضل المنتجات من حول العالم للشخص الراقي.',
        'email'          => 'hello@beautystore.com',
        'phone'          => '+971 4 123 4567',
        'address:en'     => 'Downtown Dubai, UAE',
        'address:ar'     => 'وسط مدينة دبي، الإمارات',
        'instagram'      => '#',
        'facebook'       => '#',
        'twitter'        => '#',
        'pinterest'      => '#',
        'copyright:en'   => '© ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.',
        'copyright:ar'   => '© ' . date('Y') . ' ' . config('app.name') . '. جميع الحقوق محفوظة.',
    ])->build();
