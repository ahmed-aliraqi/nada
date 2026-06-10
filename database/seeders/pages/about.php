<?php

use AhmedAliraqi\Ui\Facades\Ui;

Ui::section('about_hero')
    ->setName('About Hero')
    ->setFields([
        'label:en' => 'Our Story',
        'label:ar' => 'قصتنا',
        'title:en' => 'About Us',
        'title:ar' => 'من نحن',
    ])->build();

Ui::section('about_story')
    ->setName('About Story')
    ->setFields([
        'label:en'        => 'Established 2018',
        'label:ar'        => 'تأسست عام 2018',
        'title:en'        => 'Where Beauty Meets Artistry',
        'title:ar'        => 'حيث يلتقي الجمال بالفن',
        'paragraph_1:en'  => 'Beauty Store was born from a passion for the extraordinary. Founded in the heart of Dubai, we set out to create a sanctuary where the world\'s finest beauty products and fragrances could be discovered under one roof.',
        'paragraph_1:ar'  => 'وُلد متجر الجمال من شغف بالاستثنائي. تأسس في قلب دبي، سعينا إلى خلق ملاذ حيث يمكن اكتشاف أفضل منتجات التجميل والعطور في العالم تحت سقف واحد.',
        'paragraph_2:en'  => 'Our journey began with a simple belief: that true luxury lies in the details — the sourcing of rare ingredients, the craftsmanship of artisan perfumers, and the meticulous curation of every product that bears our name.',
        'paragraph_2:ar'  => 'بدأت رحلتنا بإيمان بسيط: أن الرفاهية الحقيقية تكمن في التفاصيل — اختيار المكونات النادرة، وحرفية صانعي العطور، والاختيار الدقيق لكل منتج يحمل اسمنا.',
        'paragraph_3:en'  => 'Today, we partner with over 50 prestigious brands and independent artisans from Grasse to Makkah, bringing you a collection that spans classic elegance and contemporary innovation.',
        'paragraph_3:ar'  => 'اليوم، نتشارك مع أكثر من 50 علامة تجارية مرموقة وحرفيين مستقلين من غراس إلى مكة، نقدم لك مجموعة تمتد من الأناقة الكلاسيكية إلى الابتكار المعاصر.',
        'stat_1_number'   => '250+',
        'stat_1_label:en' => 'Premium Products',
        'stat_1_label:ar' => 'منتج فاخر',
        'stat_1_icon'     => 'bi-gem',
        'stat_2_number'   => '30+',
        'stat_2_label:en' => 'Countries Served',
        'stat_2_label:ar' => 'دولة نخدمها',
        'stat_2_icon'     => 'bi-globe2',
        'stat_3_number'   => '15K+',
        'stat_3_label:en' => 'Happy Clients',
        'stat_3_label:ar' => 'عميل سعيد',
        'stat_3_icon'     => 'bi-people',
        'stat_4_number'   => '7',
        'stat_4_label:en' => 'Years of Excellence',
        'stat_4_label:ar' => 'سنوات من التميز',
        'stat_4_icon'     => 'bi-award',
        'image_main'      => public_path('/images/placeholder/33-1920x1080.jpg'),
        'image_secondary' => public_path('/images/placeholder/839-800x600.jpg'),
    ])->build();

Ui::section('about_values')
    ->setName('About Values')
    ->setFields([
        'label:en'    => 'Philosophy',
        'label:ar'    => 'فلسفتنا',
        'title:en'    => 'Our Values',
        'title:ar'    => 'قيمنا',
        'subtitle:en' => 'The principles that guide every decision we make',
        'subtitle:ar' => 'المبادئ التي توجه كل قرار نتخذه',
    ])->build();

Ui::section('about_value_items')
    ->setName('About Value Items')
    ->setFields([
        'icon'           => 'bi-droplet-half',
        'title:en'       => 'Pure Ingredients',
        'title:ar'       => 'مكونات نقية',
        'description:en' => 'We source only the finest natural extracts and essences, ensuring every product meets our uncompromising standards of purity.',
        'description:ar' => 'نختار فقط أجود المستخلصات والجواهر الطبيعية، لضمان أن كل منتج يلبي معاييرنا الصارمة للنقاء.',
    ])->build();

Ui::section('about_value_items')
    ->setName('About Value Items')
    ->setFields([
        'icon'           => 'bi-hand-thumbs-up',
        'title:en'       => 'Artisan Craft',
        'title:ar'       => 'الحرفية الأصيلة',
        'description:en' => 'Every fragrance and formula is crafted by master artisans who pour decades of expertise into each creation.',
        'description:ar' => 'كل عطر وتركيبة يصنعها حرفيون متمرسون يضخون عقوداً من الخبرة في كل إبداع.',
    ])->build();

Ui::section('about_value_items')
    ->setName('About Value Items')
    ->setFields([
        'icon'           => 'bi-recycle',
        'title:en'       => 'Sustainable Luxury',
        'title:ar'       => 'رفاهية مستدامة',
        'description:en' => 'Luxury and responsibility coexist. We use eco-friendly packaging and support ethical sourcing practices worldwide.',
        'description:ar' => 'الرفاهية والمسؤولية يتعايشان. نستخدم تغليفاً صديقاً للبيئة وندعم ممارسات المصادر الأخلاقية في جميع أنحاء العالم.',
    ])->build();

Ui::section('about_value_items')
    ->setName('About Value Items')
    ->setFields([
        'icon'           => 'bi-heart-pulse',
        'title:en'       => 'Client First',
        'title:ar'       => 'العميل أولاً',
        'description:en' => 'Your satisfaction is our obsession. From personalized recommendations to white-glove delivery, you are always our priority.',
        'description:ar' => 'رضاك هو هوسنا. من التوصيات الشخصية إلى التوصيل الفاخر، أنت دائماً أولويتنا.',
    ])->build();

Ui::section('about_experience')
    ->setName('About Experience')
    ->setFields([
        'label:en'       => 'The Experience',
        'label:ar'       => 'التجربة',
        'title:en'       => 'More Than a Store',
        'title:ar'       => 'أكثر من مجرد متجر',
        'description:en' => 'Step into our world of sensory discovery. From personalized fragrance consultations to exclusive preview events, every interaction with us is designed to be memorable.',
        'description:ar' => 'ادخل إلى عالمنا من الاكتشاف الحسي. من استشارات العطور الشخصية إلى فعاليات المعاينة الحصرية، كل تفاعل معنا مصمم ليكون لا يُنسى.',
        'background'     => public_path('/images/placeholder/839-800x600.jpg'),
        'cta:en'         => 'Get in Touch',
        'cta:ar'         => 'تواصل معنا',
    ])->build();

Ui::section('about_journey')
    ->setName('About Journey')
    ->setFields([
        'label:en' => 'Milestones',
        'label:ar' => 'المحطات',
        'title:en' => 'Our Journey',
        'title:ar' => 'رحلتنا',
    ])->build();

Ui::section('about_journey_items')
    ->setName('About Journey Items')
    ->setFields([
        'year'           => '2018',
        'title:en'       => 'The Beginning',
        'title:ar'       => 'البداية',
        'description:en' => 'Beauty Store opened its doors in Dubai with a curated collection of 50 premium fragrances from the world\'s finest perfume houses.',
        'description:ar' => 'فتح متجر الجمال أبوابه في دبي بمجموعة مختارة من 50 عطراً فاخراً من أفضل دور العطور في العالم.',
    ])->build();

Ui::section('about_journey_items')
    ->setName('About Journey Items')
    ->setFields([
        'year'           => '2020',
        'title:en'       => 'Expanding Horizons',
        'title:ar'       => 'توسيع الآفاق',
        'description:en' => 'Launched our makeup line and body care collection, partnering with artisan brands from France, Italy, and the Middle East.',
        'description:ar' => 'أطلقنا خط المكياج ومجموعة العناية بالجسم، بالتشارك مع علامات حرفية من فرنسا وإيطاليا والشرق الأوسط.',
    ])->build();

Ui::section('about_journey_items')
    ->setName('About Journey Items')
    ->setFields([
        'year'           => '2022',
        'title:en'       => 'Going Global',
        'title:ar'       => 'الانتشار العالمي',
        'description:en' => 'Expanded shipping to over 30 countries. Reached 10,000 loyal clients and launched our exclusive Niche Naturals collection.',
        'description:ar' => 'وسّعنا الشحن إلى أكثر من 30 دولة. وصلنا إلى 10,000 عميل وفي وأطلقنا مجموعة Niche Naturals الحصرية.',
    ])->build();

Ui::section('about_journey_items')
    ->setName('About Journey Items')
    ->setFields([
        'year'           => '2025',
        'title:en'       => 'The Future',
        'title:ar'       => 'المستقبل',
        'description:en' => 'With 250+ products, 50+ brand partners, and 15,000 happy clients, we continue to push the boundaries of luxury beauty.',
        'description:ar' => 'مع أكثر من 250 منتجاً، وأكثر من 50 شريكاً تجارياً، و15,000 عميل سعيد، نواصل دفع حدود الجمال الفاخر.',
    ])->build();

Ui::section('about_cta')
    ->setName('About CTA')
    ->setFields([
        'label:en'    => 'Ready to Explore?',
        'label:ar'    => 'مستعد للاستكشاف؟',
        'title:en'    => 'Discover Your Signature Scent',
        'title:ar'    => 'اكتشف عطرك المميز',
        'subtitle:en' => 'Browse our collection and find the fragrance that defines you.',
        'subtitle:ar' => 'تصفح مجموعتنا وابحث عن العطر الذي يعبّر عنك.',
    ])->build();
