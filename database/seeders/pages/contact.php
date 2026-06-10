<?php

use AhmedAliraqi\Ui\Facades\Ui;

Ui::section('contact_hero')
    ->setName('Contact Hero')
    ->setFields([
        'label:en' => 'Get in Touch',
        'label:ar' => 'تواصل معنا',
        'title:en' => 'Contact Us',
        'title:ar' => 'اتصل بنا',
    ])->build();

Ui::section('contact_info_items')
    ->setName('Contact Info Items')
    ->setFields([
        'icon'     => 'bi-geo-alt',
        'label:en' => 'Visit Us',
        'label:ar' => 'زورنا',
        'value:en' => "Downtown Dubai\nSheikh Mohammed Blvd\nDubai, UAE",
        'value:ar' => "وسط مدينة دبي\nشارع الشيخ محمد\nدبي، الإمارات",
    ])->build();

Ui::section('contact_info_items')
    ->setName('Contact Info Items')
    ->setFields([
        'icon'     => 'bi-telephone',
        'label:en' => 'Call Us',
        'label:ar' => 'اتصل بنا',
        'value:en' => "+971 4 123 4567\n+971 50 987 6543",
        'value:ar' => "+971 4 123 4567\n+971 50 987 6543",
    ])->build();

Ui::section('contact_info_items')
    ->setName('Contact Info Items')
    ->setFields([
        'icon'     => 'bi-envelope',
        'label:en' => 'Email Us',
        'label:ar' => 'راسلنا',
        'value:en' => "hello@beautystore.com\nsupport@beautystore.com",
        'value:ar' => "hello@beautystore.com\nsupport@beautystore.com",
    ])->build();

Ui::section('contact_info_items')
    ->setName('Contact Info Items')
    ->setFields([
        'icon'     => 'bi-clock',
        'label:en' => 'Working Hours',
        'label:ar' => 'ساعات العمل',
        'value:en' => "Sat – Thu: 10AM – 10PM\nFriday: 2PM – 10PM",
        'value:ar' => "السبت – الخميس: 10ص – 10م\nالجمعة: 2م – 10م",
    ])->build();

Ui::section('contact_form')
    ->setName('Contact Form')
    ->setFields([
        'label:en'       => 'Send a Message',
        'label:ar'       => 'أرسل رسالة',
        'title:en'       => "We'd Love to Hear From You",
        'title:ar'       => 'نحب أن نسمع منك',
        'description:en' => 'Whether you have a question about our products, need a personalized recommendation, or want to share your experience — we\'re here for you.',
        'description:ar' => 'سواء كان لديك سؤال حول منتجاتنا، أو تحتاج إلى توصية شخصية، أو تريد مشاركة تجربتك — نحن هنا من أجلك.',
    ])->build();

Ui::section('contact_map')
    ->setName('Contact Map')
    ->setFields([
        'title'      => 'Beauty Store',
        'address:en' => "Downtown Dubai\nSheikh Mohammed Boulevard",
        'address:ar' => "وسط مدينة دبي\nشارع الشيخ محمد",
        'maps_url'   => '#',
        'whatsapp'   => '+971 50 987 6543',
        'instagram'  => '@beautystore',
    ])->build();

Ui::section('contact_faq')
    ->setName('Contact FAQ')
    ->setFields([
        'label:en'    => 'Help Center',
        'label:ar'    => 'مركز المساعدة',
        'title:en'    => 'Frequently Asked Questions',
        'title:ar'    => 'الأسئلة الشائعة',
        'subtitle:en' => 'Quick answers to common questions',
        'subtitle:ar' => 'إجابات سريعة على الأسئلة الشائعة',
    ])->build();

Ui::section('contact_faq_items')
    ->setName('Contact FAQ Items')
    ->setFields([
        'question:en' => 'How long does shipping take?',
        'question:ar' => 'كم يستغرق الشحن؟',
        'answer:en'   => 'Domestic orders are delivered within 1–2 business days. International shipping typically takes 5–10 business days depending on the destination. All orders include tracking information.',
        'answer:ar'   => 'تُسلَّم الطلبات المحلية خلال 1-2 أيام عمل. يستغرق الشحن الدولي عادةً 5-10 أيام عمل حسب الوجهة. تتضمن جميع الطلبات معلومات التتبع.',
    ])->build();

Ui::section('contact_faq_items')
    ->setName('Contact FAQ Items')
    ->setFields([
        'question:en' => 'Can I get a fragrance sample before buying?',
        'question:ar' => 'هل يمكنني الحصول على عينة عطر قبل الشراء؟',
        'answer:en'   => 'Yes! We offer a sample program where you can order up to 3 sample vials for a nominal fee. The cost is fully redeemable against a full-size purchase.',
        'answer:ar'   => 'نعم! نقدم برنامج عينات حيث يمكنك طلب ما يصل إلى 3 قوارير عينات برسوم رمزية. التكلفة قابلة للاسترداد بالكامل مقابل شراء حجم كامل.',
    ])->build();

Ui::section('contact_faq_items')
    ->setName('Contact FAQ Items')
    ->setFields([
        'question:en' => 'What is your return policy?',
        'question:ar' => 'ما هي سياسة الإرجاع؟',
        'answer:en'   => 'Unopened products can be returned within 14 days of delivery. For hygiene reasons, opened makeup and perfumes cannot be returned unless they arrive damaged or defective.',
        'answer:ar'   => 'يمكن إرجاع المنتجات غير المفتوحة خلال 14 يوماً من التسليم. لأسباب صحية، لا يمكن إرجاع مستحضرات التجميل والعطور المفتوحة إلا إذا وصلت تالفة أو معيبة.',
    ])->build();

Ui::section('contact_faq_items')
    ->setName('Contact FAQ Items')
    ->setFields([
        'question:en' => 'Do you offer gift wrapping?',
        'question:ar' => 'هل تقدمون خدمة التغليف كهدية؟',
        'answer:en'   => 'Absolutely. We offer complimentary luxury gift wrapping on all orders. You can also add a personalized message card during checkout.',
        'answer:ar'   => 'بالتأكيد. نقدم تغليفاً فاخراً مجانياً للهدايا على جميع الطلبات. يمكنك أيضاً إضافة بطاقة رسالة شخصية أثناء الدفع.',
    ])->build();

Ui::section('contact_faq_items')
    ->setName('Contact FAQ Items')
    ->setFields([
        'question:en' => 'Do you ship internationally?',
        'question:ar' => 'هل تشحنون دولياً؟',
        'answer:en'   => 'Yes, we ship to over 30 countries worldwide. Shipping rates and delivery times vary by location. All international orders are carefully packaged to ensure safe arrival.',
        'answer:ar'   => 'نعم، نشحن إلى أكثر من 30 دولة في جميع أنحاء العالم. تختلف أسعار الشحن وأوقات التسليم حسب الموقع. يتم تغليف جميع الطلبات الدولية بعناية لضمان الوصول الآمن.',
    ])->build();
