<?php

use AhmedAliraqi\Ui\Facades\Ui;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // ── HOME ────────────────────────────────────────────────────────────

        Ui::section('banner')
            ->setName('Banner')
            ->setFields([
                'title:en'    => 'Every scent has a story',
                'title:ar'    => 'كل رائحة لها قصة',
                'subtitle:en' => 'Luxury perfumes crafted to become part of your identity',
                'subtitle:ar' => 'عطور فاخرة صُممت لتكون جزءًا من هويتك',
            ])->build();

        Ui::section('collections')
            ->setName('Collections')
            ->setFields([
                'title:en'    => 'Explore Our World',
                'title:ar'    => 'اكتشف عالمنا',
                'subtitle:en' => 'Four carefully curated categories to satisfy every desire',
                'subtitle:ar' => 'أربع فئات مختارة بعناية لتلبية كل رغبة',
            ])->build();

        Ui::section('chat_bot')
            ->setName('Chat Bot')
            ->setFields(['code' => ''])
            ->build();

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

        // ── ABOUT ───────────────────────────────────────────────────────────

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
                'description:ar' => 'وسّعنا الشحن إلى أكثر من 30 دولة. وصلنا إلى 10,000 عميل وفيّ وأطلقنا مجموعة Niche Naturals الحصرية.',
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

        // ── CONTACT ─────────────────────────────────────────────────────────

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

        // ── FOOTER ──────────────────────────────────────────────────────────

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
    }

    public function down(): void
    {
        //
    }
};
