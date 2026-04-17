/* ============================================
   TRENDORA - Main JavaScript
   ============================================ */

// ============ PRODUCT DATA ============
const products = [
  {
    id: 1,
    name_en: "Velvet Rose Lipstick",
    name_ar: "أحمر شفاه مخملي بالوردي",
    category: "makeup",
    subcategory: "lips",
    price: 45,
    originalPrice: 60,
    badge: "sale",
    images: [
      "https://picsum.photos/seed/trend-lip1/600/750",
      "https://picsum.photos/seed/trend-lip1b/600/750",
      "https://picsum.photos/seed/trend-lip1c/600/750",
      "https://picsum.photos/seed/trend-lip1d/600/750"
    ],
    desc_en: "A luxurious velvet-finish lipstick in a rich rose shade. Long-wearing formula keeps your lips hydrated and vibrant all day.",
    desc_ar: "أحمر شفاه فاخر بلمسة مخملية بدرجة وردية غنية. تركيبة طويلة الأمد تحافظ على شفاهك مرطبة ومشرقة طوال اليوم."
  },
  {
    id: 2,
    name_en: "Silk Glow Foundation",
    name_ar: "أساس حريري متوهج",
    category: "makeup",
    subcategory: "face",
    price: 55,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-found1/600/750",
      "https://picsum.photos/seed/trend-found1b/600/750",
      "https://picsum.photos/seed/trend-found1c/600/750",
      "https://picsum.photos/seed/trend-found1d/600/750"
    ],
    desc_en: "Lightweight silk-finish foundation that provides buildable coverage with a natural luminous glow for flawless skin.",
    desc_ar: "أساس خفيف بلمسة حريرية يوفر تغطية قابلة للبناء مع إشراقة طبيعية لبشرة خالية من العيوب."
  },
  {
    id: 3,
    name_en: "Diamond Eyeshadow Palette",
    name_ar: "لوحة ظلال عيون الماس",
    category: "makeup",
    subcategory: "eyes",
    price: 75,
    originalPrice: null,
    badge: "new",
    images: [
      "https://picsum.photos/seed/trend-eye1/600/750",
      "https://picsum.photos/seed/trend-eye1b/600/750",
      "https://picsum.photos/seed/trend-eye1c/600/750",
      "https://picsum.photos/seed/trend-eye1d/600/750"
    ],
    desc_en: "12 stunning diamond-shimmer shades from nudes to smoky tones. Highly pigmented, blendable formula for mesmerizing eye looks.",
    desc_ar: "12 درجة لامعة مذهلة من الماس من درجات الباستيل إلى الدخانية. تركيبة غنية الأصباغ وقابلة للدمج لإطلالات عيون ساحرة."
  },
  {
    id: 4,
    name_en: "Royal Blush Compact",
    name_ar: "بودرة أحمر خدود ملكية",
    category: "makeup",
    subcategory: "face",
    price: 35,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-blush1/600/750",
      "https://picsum.photos/seed/trend-blush1b/600/750",
      "https://picsum.photos/seed/trend-blush1c/600/750",
      "https://picsum.photos/seed/trend-blush1d/600/750"
    ],
    desc_en: "Finely milled blush that blends effortlessly for a natural, healthy flush of color that lasts all day.",
    desc_ar: "أحمر خدود ناعم الملمس يمتزج بسهولة لإعطاء لون طبيعي وصحي يدوم طوال اليوم."
  },
  {
    id: 5,
    name_en: "Luxe Volume Mascara",
    name_ar: "ماسكارا فخمة للرموش",
    category: "makeup",
    subcategory: "eyes",
    price: 40,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-masc1/600/750",
      "https://picsum.photos/seed/trend-masc1b/600/750",
      "https://picsum.photos/seed/trend-masc1c/600/750",
      "https://picsum.photos/seed/trend-masc1d/600/750"
    ],
    desc_en: "Volumizing and lengthening mascara that creates dramatic, bold lashes without clumping or smudging.",
    desc_ar: "ماسكارا تضيف الحجم والطول لرموشك وتخلق إطلالة درامية وجريئة بدون تكتلات أو تلطيخ."
  },
  {
    id: 6,
    name_en: "Pearl Nail Polish Set",
    name_ar: "طقم طلاء أظافر اللؤلؤ",
    category: "makeup",
    subcategory: "nails",
    price: 30,
    originalPrice: null,
    badge: "new",
    images: [
      "https://picsum.photos/seed/trend-nail1/600/750",
      "https://picsum.photos/seed/trend-nail1b/600/750",
      "https://picsum.photos/seed/trend-nail1c/600/750",
      "https://picsum.photos/seed/trend-nail1d/600/750"
    ],
    desc_en: "Set of 6 pearl-finish nail polishes in elegant shades. Quick-dry, chip-resistant formula for a flawless manicure.",
    desc_ar: "طقم من 6 ألوان طلاء أظافر بلمسة لؤلؤية أنيقة. تركيبة سريعة الجفاف ومقاومة للتشقق لمانيكير مثالي."
  },
  {
    id: 7,
    name_en: "Matte Lip Kit Collection",
    name_ar: "طقم شفاه مات",
    category: "makeup",
    subcategory: "lips",
    price: 50,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-lipkit/600/750",
      "https://picsum.photos/seed/trend-lipkitb/600/750",
      "https://picsum.photos/seed/trend-lipkitc/600/750",
      "https://picsum.photos/seed/trend-lipkitd/600/750"
    ],
    desc_en: "Complete matte lip kit with liner and lipstick in complementary shades for perfectly defined, velvety lips.",
    desc_ar: "طقم شفاه مات كامل مع محدد وأحمر شفاه بدرجات متكاملة لشفاه محددة ومخملية بشكل مثالي."
  },
  {
    id: 8,
    name_en: "Golden Highlighter Wand",
    name_ar: "قلم إضاءة ذهبي",
    category: "makeup",
    subcategory: "face",
    price: 42,
    originalPrice: 55,
    badge: "sale",
    images: [
      "https://picsum.photos/seed/trend-high1/600/750",
      "https://picsum.photos/seed/trend-high1b/600/750",
      "https://picsum.photos/seed/trend-high1c/600/750",
      "https://picsum.photos/seed/trend-high1d/600/750"
    ],
    desc_en: "Liquid highlighter wand with ultra-fine shimmer particles for a radiant, lit-from-within golden glow.",
    desc_ar: "قلم إضاءة سائل بجسيمات لامعة فائقة النعومة لإشراقة ذهبية مشرقة من الداخل."
  },
  {
    id: 9,
    name_en: "Rose Elixir Perfume",
    name_ar: "عطر إكسير الورد",
    category: "perfume",
    subcategory: "women",
    price: 120,
    originalPrice: null,
    badge: "new",
    images: [
      "https://picsum.photos/seed/trend-perf1/600/750",
      "https://picsum.photos/seed/trend-perf1b/600/750",
      "https://picsum.photos/seed/trend-perf1c/600/750",
      "https://picsum.photos/seed/trend-perf1d/600/750"
    ],
    desc_en: "An enchanting fragrance blending Bulgarian rose, peony, and white musk. A timeless scent of feminine elegance.",
    desc_ar: "عطر ساحر يمزج الورد البلغاري والفاونيا والمسك الأبيض. رائحة خالدة للأنوثة والأرستقراطية."
  },
  {
    id: 10,
    name_en: "Oud Noir Eau de Parfum",
    name_ar: "عطر العود الأسود",
    category: "perfume",
    subcategory: "men",
    price: 150,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-oud1/600/750",
      "https://picsum.photos/seed/trend-oud1b/600/750",
      "https://picsum.photos/seed/trend-oud1c/600/750",
      "https://picsum.photos/seed/trend-oud1d/600/750"
    ],
    desc_en: "A bold, sophisticated fragrance featuring rare oud wood, amber, and smoky vetiver. For the modern gentleman.",
    desc_ar: "عطر جريء وراقٍ يتميز بأخشاب العود النادرة والعنبر والفيتيفر الدخاني. مصمم للرجل العصري."
  },
  {
    id: 11,
    name_en: "Floral Bliss Eau de Toilette",
    name_ar: "عطر بهجة الزهور",
    category: "perfume",
    subcategory: "women",
    price: 95,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-flor1/600/750",
      "https://picsum.photos/seed/trend-flor1b/600/750",
      "https://picsum.photos/seed/trend-flor1c/600/750",
      "https://picsum.photos/seed/trend-flor1d/600/750"
    ],
    desc_en: "A joyful burst of jasmine, lily of the valley, and fresh bergamot. Light, airy, and effortlessly romantic.",
    desc_ar: "انفجار مبتهج من الياسمين وزهر الليل والبرغموت المنعش. خفيف ومنعش ورومانسي بلا جهد."
  },
  {
    id: 12,
    name_en: "Fresh Aqua Unisex Perfume",
    name_ar: "عطر أكوا المنعش للجنسين",
    category: "perfume",
    subcategory: "unisex",
    price: 85,
    originalPrice: 110,
    badge: "sale",
    images: [
      "https://picsum.photos/seed/trend-aqua1/600/750",
      "https://picsum.photos/seed/trend-aqua1b/600/750",
      "https://picsum.photos/seed/trend-aqua1c/600/750",
      "https://picsum.photos/seed/trend-aqua1d/600/750"
    ],
    desc_en: "A refreshing oceanic blend of sea salt, cucumber, and driftwood. Perfect for everyday wear, any season.",
    desc_ar: "مزيج منعش من المحيط يمزج ملح البحر والخيار وخشب الساحل. مثالي للاستخدام اليومي في كل المواسم."
  },
  {
    id: 13,
    name_en: "Precision Eyeliner Pen",
    name_ar: "قلم محدد عيون دقيق",
    category: "makeup",
    subcategory: "eyes",
    price: 28,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-line1/600/750",
      "https://picsum.photos/seed/trend-line1b/600/750",
      "https://picsum.photos/seed/trend-line1c/600/750",
      "https://picsum.photos/seed/trend-line1d/600/750"
    ],
    desc_en: "Ultra-fine tip eyeliner pen for precise, smudge-proof lines. Waterproof formula that lasts up to 24 hours.",
    desc_ar: "قلم محدد عيون بنقطة فائقة الدقة لخطوط دقيقة غير قابلة للتلطيخ. تركيبة مقاومة للماء تدوم حتى 24 ساعة."
  },
  {
    id: 14,
    name_en: "Sculpt & Glow Bronzer",
    name_ar: "برونزر النحت والإشراق",
    category: "makeup",
    subcategory: "face",
    price: 48,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-bron1/600/750",
      "https://picsum.photos/seed/trend-bron1b/600/750",
      "https://picsum.photos/seed/trend-bron1c/600/750",
      "https://picsum.photos/seed/trend-bron1d/600/750"
    ],
    desc_en: "Matte bronzer with subtle shimmer particles for natural-looking warmth and a sun-kissed sculpted finish.",
    desc_ar: "برونزر مات بجسيمات لامعة خفيفة لإضافة دفء طبيعي ومظهر منحوت بلون شمسي."
  },
  {
    id: 15,
    name_en: "Gel Nail Art Collection",
    name_ar: "مجموعة فن الأظافر الجل",
    category: "makeup",
    subcategory: "nails",
    price: 38,
    originalPrice: null,
    badge: "new",
    images: [
      "https://picsum.photos/seed/trend-gelnail/600/750",
      "https://picsum.photos/seed/trend-gelnailb/600/750",
      "https://picsum.photos/seed/trend-gelnailc/600/750",
      "https://picsum.photos/seed/trend-gelnaild/600/750"
    ],
    desc_en: "Professional gel nail collection with 8 trendy shades. High-shine, long-lasting gel formula for salon-quality nails at home.",
    desc_ar: "مجموعة أظافر جل احترافية بـ 8 درجات عصرية. تركيبة جل لامعة وطويلة الأمد لأظافر بجودة الصالون في المنزل."
  },
  {
    id: 16,
    name_en: "Midnight Musk Perfume",
    name_ar: "عطر المسك منتصف الليل",
    category: "perfume",
    subcategory: "unisex",
    price: 130,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-musk1/600/750",
      "https://picsum.photos/seed/trend-musk1b/600/750",
      "https://picsum.photos/seed/trend-musk1c/600/750",
      "https://picsum.photos/seed/trend-musk1d/600/750"
    ],
    desc_en: "A mysterious, sensual blend of dark musk, black vanilla, and sandalwood. An intoxicating evening fragrance.",
    desc_ar: "مزيج غامض وجذاب من المسك الأسود والفانيليا السوداء وخشب الصندل. عطر مسائي مخدر."
  },
  {
    id: 17,
    name_en: "Classic Red Lipstick",
    name_ar: "أحمر شفاه كلاسيكي أحمر",
    category: "makeup",
    subcategory: "lips",
    price: 38,
    originalPrice: null,
    badge: null,
    images: [
      "https://picsum.photos/seed/trend-redlip/600/750",
      "https://picsum.photos/seed/trend-redlipb/600/750",
      "https://picsum.photos/seed/trend-redlipc/600/750",
      "https://picsum.photos/seed/trend-redlipd/600/750"
    ],
    desc_en: "The iconic true red lipstick with a creamy satin finish. A timeless beauty essential for every makeup collection.",
    desc_ar: "أحمر شفاه أحمر حقيقي كلاسيكي بلمسة ساتان كريمية. عنصر جمال خالد في كل مجموعة مكياج."
  },
  {
    id: 18,
    name_en: "Amber Woods Parfum",
    name_ar: "عطر غابات العنبر",
    category: "perfume",
    subcategory: "men",
    price: 140,
    originalPrice: null,
    badge: "new",
    images: [
      "https://picsum.photos/seed/trend-amb1/600/750",
      "https://picsum.photos/seed/trend-amb1b/600/750",
      "https://picsum.photos/seed/trend-amb1c/600/750",
      "https://picsum.photos/seed/trend-amb1d/600/750"
    ],
    desc_en: "A warm, woody fragrance with rich amber, cedarwood, and leather notes. Confident and refined for special occasions.",
    desc_ar: "عطر دافئ خشبي بلمسات عنبر غنية وخشب الأرز والجلد. واثق وراقٍ للمناسبات الخاصة."
  }
];

// ============ CATEGORY DATA ============
const categories = [
  { id: "lips", name_en: "Lips", name_ar: "الشفاه", image: "https://picsum.photos/seed/cat-lips-tr/600/800" },
  { id: "eyes", name_en: "Eyes", name_ar: "العيون", image: "https://picsum.photos/seed/cat-eyes-tr/600/800" },
  { id: "face", name_en: "Face", name_ar: "الوجه", image: "https://picsum.photos/seed/cat-face-tr/600/800" },
  { id: "nails", name_en: "Nails", name_ar: "الأظافر", image: "https://picsum.photos/seed/cat-nails-tr/600/800" },
  { id: "perfume", name_en: "Perfumes", name_ar: "العطور", image: "https://picsum.photos/seed/cat-perf-tr/600/800" }
];

// ============ TRANSLATIONS ============
const translations = {
  nav_home: { en: "Home", ar: "الرئيسية" },
  nav_shop: { en: "Shop", ar: "المتجر" },
  nav_about: { en: "About", ar: "من نحن" },
  nav_contact: { en: "Contact", ar: "اتصل بنا" },
  hero_badge: { en: "NEW COLLECTION 2025", ar: "مجموعة جديدة 2025" },
  hero_title_1: { en: "Discover Your", ar: "اكتشفي" },
  hero_title_2: { en: "Perfect Beauty", ar: "جمالك المثالي" },
  hero_desc: { en: "Explore our curated collection of premium makeup and luxurious perfumes. Elegance meets innovation.", ar: "استكشفي مجموعتنا المختارة من المكياج الفاخر والعطور الراقية. حيث تلتقي الأناقة بالابتكار." },
  hero_btn_shop: { en: "Shop Now", ar: "تسوقي الآن" },
  hero_btn_explore: { en: "Explore", ar: "اكتشفي المزيد" },
  cat_section_label: { en: "BROWSE BY CATEGORY", ar: "تصفحي حسب الفئة" },
  cat_section_title: { en: "Find What You Love", ar: "اعثري على ما تحبين" },
  featured_label: { en: "CURATED FOR YOU", ar: "اختيارات مميزة لك" },
  featured_title: { en: "Featured Products", ar: "منتجات مميزة" },
  best_label: { en: "CUSTOMER FAVORITES", ar: "مفضلات العملاء" },
  best_title: { en: "Best Sellers", ar: "الأكثر مبيعاً" },
  add_to_cart: { en: "Add to Cart", ar: "أضيفي للسلة" },
  new_badge: { en: "NEW", ar: "جديد" },
  sale_badge: { en: "SALE", ar: "تخفيض" },
  shop_title: { en: "Our Collection", ar: "مجموعتنا" },
  shop_desc: { en: "Browse our complete range of premium beauty products", ar: "تصفحي مجموعتنا الكاملة من منتجات الجمال الفاخرة" },
  filter_all: { en: "All", ar: "الكل" },
  filter_lips: { en: "Lips", ar: "الشفاه" },
  filter_eyes: { en: "Eyes", ar: "العيون" },
  filter_face: { en: "Face", ar: "الوجه" },
  filter_nails: { en: "Nails", ar: "الأظافر" },
  filter_perfume: { en: "Perfumes", ar: "العطور" },
  search_placeholder: { en: "Search products...", ar: "ابحثي عن منتجات..." },
  sort_label: { en: "Sort by:", ar: "ترتيب حسب:" },
  sort_default: { en: "Default", ar: "الافتراضي" },
  sort_price_low: { en: "Price: Low to High", ar: "السعر: من الأقل" },
  sort_price_high: { en: "Price: High to Low", ar: "السعر: من الأعلى" },
  sort_name: { en: "Name: A-Z", ar: "الاسم: أ-ي" },
  no_results: { en: "No products found matching your criteria.", ar: "لا توجد منتجات تطابق معايير البحث." },
  product_desc_label: { en: "Description", ar: "الوصف" },
  product_order_title: { en: "Quick Order", ar: "طلب سريع" },
  form_name: { en: "Full Name", ar: "الاسم الكامل" },
  form_phone: { en: "Phone Number", ar: "رقم الهاتف" },
  form_address: { en: "Delivery Address", ar: "عنوان التوصيل" },
  form_notes: { en: "Notes (optional)", ar: "ملاحظات (اختياري)" },
  form_submit: { en: "Place Order", ar: "تأكيد الطلب" },
  cart_title: { en: "Shopping Cart", ar: "سلة التسوق" },
  cart_desc: { en: "Review your items before checkout", ar: "راجعي منتجاتك قبل الدفع" },
  cart_empty_title: { en: "Your Cart is Empty", ar: "سلتك فارغة" },
  cart_empty_desc: { en: "Looks like you haven't added anything yet.", ar: "يبدو أنك لم تضيفي أي منتجات بعد." },
  cart_empty_btn: { en: "Start Shopping", ar: "ابدئي التسوق" },
  cart_summary: { en: "Order Summary", ar: "ملخص الطلب" },
  cart_subtotal: { en: "Subtotal", ar: "المجموع الفرعي" },
  cart_shipping: { en: "Shipping", ar: "الشحن" },
  cart_shipping_free: { en: "Free", ar: "مجاني" },
  cart_total: { en: "Total", ar: "المجموع الكلي" },
  cart_checkout: { en: "Proceed to Checkout", ar: "المتابعة للدفع" },
  checkout_title: { en: "Checkout", ar: "إتمام الطلب" },
  checkout_desc: { en: "Complete your order details", ar: "أكملي تفاصيل طلبك" },
  checkout_personal: { en: "Personal Information", ar: "المعلومات الشخصية" },
  checkout_delivery: { en: "Delivery Details", ar: "تفاصيل التوصيل" },
  checkout_payment: { en: "Payment Method", ar: "طريقة الدفع" },
  checkout_cash: { en: "Cash on Delivery", ar: "الدفع عند الاستلام" },
  checkout_cash_desc: { en: "Pay with cash when your order arrives", ar: "ادفعي نقداً عند استلام طلبك" },
  checkout_order_summary: { en: "Order Summary", ar: "ملخص الطلب" },
  checkout_items: { en: "items", ar: "منتجات" },
  checkout_place_order: { en: "Place Order", ar: "تأكيد الطلب" },
  success_title: { en: "Order Placed!", ar: "تم تأكيد الطلب!" },
  success_desc: { en: "Thank you for your order. We will contact you shortly.", ar: "شكراً لطلبك. سنتواصل معك قريباً." },
  success_btn: { en: "Continue Shopping", ar: "متابعة التسوق" },
  about_title: { en: "About Trendora", ar: "عن ترندورا" },
  about_desc: { en: "Our story of beauty and elegance", ar: "قصتنا في الجمال والأناقة" },
  about_h1: { en: "Redefining Beauty Standards", ar: "إعادة تعريف معايير الجمال" },
  about_p1: { en: "Trendora was born from a passion for premium beauty products that empower individuals to express their unique identity. Founded in 2020, we have quickly become a trusted destination for makeup enthusiasts and perfume lovers.", ar: "ولدت ترندورا من شغف بمنتجات الجمال الفاخرة التي تمكّن الأفراد من التعبير عن هويتهم الفريدة. تأسست في 2020 وأصبحت بسرعة وجهة موثوقة لعشاق المكياج والعطور." },
  about_p2: { en: "We carefully curate every product in our collection, ensuring it meets our high standards of quality, innovation, and ethical sourcing. From luxurious lipsticks to enchanting perfumes, each item tells a story of craftsmanship.", ar: "نختار بعناية كل منتج في مجموعتنا، ونتأكد من أنه يلبي معاييرنا العالية من الجودة والابتكار والاستدامة. من أحمر الشفاه الفاخر إلى العطور الساحرة، كل منتج يحكي قصة من الحرفية." },
  about_h2: { en: "Our Mission", ar: "مهمتنا" },
  about_p3: { en: "To make premium beauty accessible to everyone while maintaining the highest standards of quality and customer experience. We believe beauty is not a luxury — it is a right.", ar: "جعل الجمال الفاخر متاحاً للجميع مع الحفاظ على أعلى معايير الجودة وتجربة العملاء. نؤمن أن الجمال ليس رفاهية — بل هو حق." },
  stat_products: { en: "Products", ar: "منتج" },
  stat_customers: { en: "Happy Customers", ar: "عميل سعيد" },
  stat_brands: { en: "Brands", ar: "علامة تجارية" },
  stat_years: { en: "Years Experience", ar: "سنوات خبرة" },
  contact_title: { en: "Get in Touch", ar: "تواصلي معنا" },
  contact_desc: { en: "We would love to hear from you", ar: "نسعد بتواصلك معنا" },
  contact_info: { en: "Contact Information", ar: "معلومات التواصل" },
  contact_address: { en: "123 Beauty Boulevard, Fashion District, Dubai, UAE", ar: "123 شارع الجمال، حي الموضة، دبي، الإمارات" },
  contact_phone: { en: "+971 4 123 4567", ar: "+971 4 123 4567" },
  contact_email: { en: "hello@trendora.com", ar: "hello@trendora.com" },
  contact_hours: { en: "Sat - Thu: 10:00 AM - 10:00 PM", ar: "السبت - الخميس: 10:00 ص - 10:00 م" },
  contact_form_title: { en: "Send us a Message", ar: "أرسلي لنا رسالة" },
  form_email: { en: "Email Address", ar: "البريد الإلكتروني" },
  form_subject: { en: "Subject", ar: "الموضوع" },
  form_message: { en: "Your Message", ar: "رسالتك" },
  form_send: { en: "Send Message", ar: "إرسال الرسالة" },
  footer_desc: { en: "Your destination for premium beauty products and luxurious fragrances. Discover elegance with every purchase.", ar: "وجهتك للمنتجات الفاخرة والعطور الراقية. اكتشفي الأناقة مع كل عملية شراء." },
  footer_links: { en: "Quick Links", ar: "روابط سريعة" },
  footer_help: { en: "Help", ar: "المساعدة" },
  footer_faq: { en: "FAQ", ar: "الأسئلة الشائعة" },
  footer_shipping: { en: "Shipping Info", ar: "معلومات الشحن" },
  footer_returns: { en: "Returns", ar: "الإرجاع" },
  footer_privacy: { en: "Privacy Policy", ar: "سياسة الخصوصية" },
  footer_terms: { en: "Terms of Service", ar: "شروط الخدمة" },
  footer_rights: { en: "All rights reserved.", ar: "جميع الحقوق محفوظة." },
  breadcrumb_home: { en: "Home", ar: "الرئيسية" },
  qty_label: { en: "Quantity", ar: "الكمية" },
  order_success_msg: { en: "Your order has been submitted successfully!", ar: "تم تقديم طلبك بنجاح!" },
  msg_sent: { en: "Your message has been sent successfully!", ar: "تم إرسال رسالتك بنجاح!" },
  added_to_cart: { en: "Added to cart!", ar: "تمت الإضافة للسلة!" }
};

// ============ LANGUAGE SYSTEM ============
let currentLang = localStorage.getItem('trendora_lang') || 'en';

function setLanguage(lang) {
  currentLang = lang;
  localStorage.setItem('trendora_lang', lang);
  const dir = lang === 'ar' ? 'rtl' : 'ltr';
  $('html').attr('dir', dir);
  $('html').attr('lang', lang);

  $('[data-i18n]').each(function() {
    const key = $(this).data('i18n');
    if (translations[key] && translations[key][lang]) {
      $(this).text(translations[key][lang]);
    }
  });

  $('[data-i18n-placeholder]').each(function() {
    const key = $(this).data('i18n-placeholder');
    if (translations[key] && translations[key][lang]) {
      $(this).attr('placeholder', translations[key][lang]);
    }
  });

  // Update lang toggle button text
  $('.lang-btn').text(lang === 'en' ? 'AR' : 'EN');

  // Re-render dynamic content if on shop or product page
  const page = getCurrentPage();
  if (page === 'shop.html') renderShopProducts();
  if (page === 'product.html') renderProductPage();
  if (page === 'cart.html') renderCartPage();
  if (page === 'checkout.html') renderCheckoutPage();
}

function toggleLanguage() {
  setLanguage(currentLang === 'en' ? 'ar' : 'en');
}

// ============ THEME SYSTEM ============
let currentTheme = localStorage.getItem('trendora_theme') || 'light';

function setTheme(theme) {
  currentTheme = theme;
  localStorage.setItem('trendora_theme', theme);
  if (theme === 'dark') {
    $('html').addClass('dark-mode');
  } else {
    $('html').removeClass('dark-mode');
  }
  // Update icon
  const icon = $('.theme-toggle-btn i');
  if (icon.length) {
    icon.removeClass().addClass(theme === 'dark' ? 'bi bi-sun' : 'bi bi-moon');
  }
}

function toggleTheme() {
  setTheme(currentTheme === 'light' ? 'dark' : 'light');
}

// ============ CART SYSTEM ============
const Cart = {
  items: [],

  init() {
    this.items = JSON.parse(localStorage.getItem('trendora_cart')) || [];
    this.updateBadge();
  },

  add(product, qty) {
    qty = qty || 1;
    const existing = this.items.find(i => i.id === product.id);
    if (existing) {
      existing.qty += qty;
    } else {
      this.items.push({
        id: product.id,
        name_en: product.name_en,
        name_ar: product.name_ar,
        price: product.price,
        image: product.images[0],
        qty: qty
      });
    }
    this.save();
    this.updateBadge();
    this.animateBadge();
  },

  remove(id) {
    this.items = this.items.filter(i => i.id !== id);
    this.save();
    this.updateBadge();
  },

  updateQty(id, qty) {
    const item = this.items.find(i => i.id === id);
    if (item) {
      item.qty = Math.max(1, qty);
      this.save();
      this.updateBadge();
    }
  },

  getTotal() {
    return this.items.reduce((sum, item) => sum + (item.price * item.qty), 0);
  },

  getCount() {
    return this.items.reduce((sum, item) => sum + item.qty, 0);
  },

  save() {
    localStorage.setItem('trendora_cart', JSON.stringify(this.items));
  },

  updateBadge() {
    const count = this.getCount();
    const badge = $('#cart-badge');
    badge.text(count);
    if (count > 0) {
      badge.removeClass('d-none');
    } else {
      badge.addClass('d-none');
    }
  },

  animateBadge() {
    const badge = $('#cart-badge');
    badge.addClass('cart-bounce');
    setTimeout(() => badge.removeClass('cart-bounce'), 500);
  },

  clear() {
    this.items = [];
    this.save();
    this.updateBadge();
  }
};

// ============ UTILITY ============
function getCurrentPage() {
  const path = window.location.pathname;
  const parts = path.split('/');
  return parts[parts.length - 1] || 'index.html';
}

function getProductName(product) {
  return currentLang === 'ar' ? product.name_ar : product.name_en;
}

function getProductDesc(product) {
  return currentLang === 'ar' ? product.desc_ar : product.desc_en;
}

function showToast(message) {
  let toast = $('.toast-alert');
  if (!toast.length) {
    toast = $('<div class="toast-alert"></div>');
    $('body').append(toast);
  }
  toast.text(message).addClass('show');
  setTimeout(() => toast.removeClass('show'), 2500);
}

function renderProductCard(product, index) {
  const name = getProductName(product);
  const badgeHtml = product.badge
    ? `<span class="product-badge badge-${product.badge}">${translations[product.badge === 'new' ? 'new_badge' : 'sale_badge'][currentLang]}</span>`
    : '';
  const oldPriceHtml = product.originalPrice
    ? `<span class="product-price-old">$${product.originalPrice}</span>`
    : '';

  return `
    <div class="product-card reveal" style="transition-delay: ${index * 0.1}s">
      <div class="product-card-img">
        ${badgeHtml}
        <a href="product.html?id=${product.id}">
          <img src="${product.images[0]}" alt="${name}" loading="lazy">
        </a>
        <div class="product-card-actions">
          <button class="btn-gold btn-add-cart" data-id="${product.id}">
            <i class="bi bi-bag-plus"></i>
            <span data-i18n="add_to_cart">${translations.add_to_cart[currentLang]}</span>
          </button>
        </div>
      </div>
      <div class="product-card-body">
        <div class="product-card-category">${product.subcategory}</div>
        <a href="product.html?id=${product.id}" class="product-card-name">${name}</a>
        <div class="product-card-price">
          <span class="product-price-current">$${product.price}</span>
          ${oldPriceHtml}
        </div>
      </div>
    </div>
  `;
}

// ============ PAGE: HOME ============
function initHomePage() {
  // Categories
  let catHtml = '';
  categories.forEach((cat, i) => {
    catHtml += `
      <a href="shop.html?cat=${cat.id}" class="category-card reveal" style="transition-delay: ${i * 0.1}s">
        <img src="${cat.image}" alt="${cat.name_en}" loading="lazy">
        <div class="category-overlay">
          <h4>${currentLang === 'ar' ? cat.name_ar : cat.name_en}</h4>
        </div>
      </a>
    `;
  });
  $('#categories-grid').html(catHtml);

  // Featured products (first 8)
  const featured = products.slice(0, 8);
  let featuredHtml = '';
  featured.forEach((p, i) => {
    featuredHtml += renderProductCard(p, i);
  });
  $('#featured-grid').html(featuredHtml);

  // Best sellers (products with badges)
  const bestSellers = products.filter(p => p.badge).slice(0, 4);
  let bestHtml = '';
  bestSellers.forEach((p, i) => {
    bestHtml += renderProductCard(p, i);
  });
  $('#bestsellers-grid').html(bestHtml);

  initScrollReveal();
}

// ============ PAGE: SHOP ============
let shopFilter = 'all';
let shopSort = 'default';
let shopSearch = '';

function initShopPage() {
  // Check URL for category filter
  const params = new URLSearchParams(window.location.search);
  const catParam = params.get('cat');
  if (catParam) {
    shopFilter = catParam;
    $(`.filter-btn[data-filter="${catParam}"]`).addClass('active');
  }

  renderShopProducts();
}

function renderShopProducts() {
  let filtered = [...products];

  // Filter
  if (shopFilter !== 'all') {
    if (shopFilter === 'perfume') {
      filtered = filtered.filter(p => p.category === 'perfume');
    } else {
      filtered = filtered.filter(p => p.subcategory === shopFilter);
    }
  }

  // Search
  if (shopSearch) {
    const q = shopSearch.toLowerCase();
    filtered = filtered.filter(p =>
      p.name_en.toLowerCase().includes(q) ||
      p.name_ar.includes(q) ||
      p.subcategory.toLowerCase().includes(q)
    );
  }

  // Sort
  switch (shopSort) {
    case 'price-low':
      filtered.sort((a, b) => a.price - b.price);
      break;
    case 'price-high':
      filtered.sort((a, b) => b.price - a.price);
      break;
    case 'name':
      filtered.sort((a, b) => {
        const na = currentLang === 'ar' ? a.name_ar : a.name_en;
        const nb = currentLang === 'ar' ? b.name_ar : b.name_en;
        return na.localeCompare(nb);
      });
      break;
  }

  const grid = $('#shop-products-grid');
  if (filtered.length === 0) {
    grid.html(`
      <div class="no-results" style="grid-column: 1 / -1;">
        <i class="bi bi-search"></i>
        <p data-i18n="no_results">${translations.no_results[currentLang]}</p>
      </div>
    `);
  } else {
    let html = '';
    filtered.forEach((p, i) => {
      html += renderProductCard(p, i);
    });
    grid.html(html);
  }

  initScrollReveal();
  bindAddToCart();
}

// ============ PAGE: PRODUCT ============
function initProductPage() {
  renderProductPage();
}

function renderProductPage() {
  const params = new URLSearchParams(window.location.search);
  const id = parseInt(params.get('id'));
  const product = products.find(p => p.id === id);

  if (!product) {
    window.location.href = 'shop.html';
    return;
  }

  const name = getProductName(product);
  const desc = getProductDesc(product);
  const oldPriceHtml = product.originalPrice
    ? `<span class="old">$${product.originalPrice}</span>`
    : '';
  const badgeHtml = product.badge
    ? `<span class="product-badge badge-${product.badge}" style="position:static;display:inline-block;margin-bottom:12px;">${translations[product.badge === 'new' ? 'new_badge' : 'sale_badge'][currentLang]}</span>`
    : '';

  // Gallery
  let thumbsHtml = '';
  product.images.forEach((img, i) => {
    thumbsHtml += `
      <div class="gallery-thumb ${i === 0 ? 'active' : ''}" data-index="${i}">
        <img src="${img}" alt="${name}" loading="lazy">
      </div>
    `;
  });

  $('#product-gallery-main').html(`<img src="${product.images[0]}" alt="${name}" id="gallery-main-img">`);
  $('#product-gallery-thumbs').html(thumbsHtml);
  $('#product-info').html(`
    ${badgeHtml}
    <div class="product-detail-category">${product.category === 'perfume' ? 'Perfume' : product.subcategory}</div>
    <h1 class="product-detail-name">${name}</h1>
    <div class="product-detail-price">
      <span class="current">$${product.price}</span>
      ${oldPriceHtml}
    </div>
    <p class="product-detail-desc">${desc}</p>
    <div class="product-detail-actions">
      <div class="qty-selector">
        <button class="qty-minus">-</button>
        <input type="number" value="1" min="1" id="product-qty" readonly>
        <button class="qty-plus">+</button>
      </div>
      <button class="btn-gold btn-add-cart-product" data-id="${product.id}">
        <i class="bi bi-bag-plus"></i>
        <span data-i18n="add_to_cart">${translations.add_to_cart[currentLang]}</span>
      </button>
    </div>
  `);

  // Update breadcrumb
  $('#breadcrumb-product').text(name);
}

// ============ PAGE: CART ============
function initCartPage() {
  renderCartPage();
}

function renderCartPage() {
  const container = $('#cart-items-container');
  const summaryContainer = $('#cart-summary-container');

  if (Cart.items.length === 0) {
    container.html(`
      <div class="empty-cart" style="grid-column: 1 / -1;">
        <i class="bi bi-bag-x"></i>
        <h3 data-i18n="cart_empty_title">${translations.cart_empty_title[currentLang]}</h3>
        <p data-i18n="cart_empty_desc">${translations.cart_empty_desc[currentLang]}</p>
        <a href="shop.html" class="btn-gold" data-i18n="cart_empty_btn">${translations.cart_empty_btn[currentLang]}</a>
      </div>
    `);
    summaryContainer.html('');
    return;
  }

  let itemsHtml = '';
  Cart.items.forEach(item => {
    const name = currentLang === 'ar' ? item.name_ar : item.name_en;
    itemsHtml += `
      <div class="cart-item" data-id="${item.id}">
        <div class="cart-item-img">
          <img src="${item.image}" alt="${name}">
        </div>
        <div class="cart-item-info">
          <div class="cart-item-name">${name}</div>
          <div class="cart-item-cat">${item.qty}x</div>
          <div class="cart-item-price">$${(item.price * item.qty).toFixed(2)}</div>
        </div>
        <div class="cart-item-actions">
          <button class="cart-remove-btn" data-id="${item.id}"><i class="bi bi-x"></i></button>
          <div class="qty-selector">
            <button class="cart-qty-minus" data-id="${item.id}">-</button>
            <input type="number" value="${item.qty}" min="1" class="cart-qty-input" data-id="${item.id}" readonly>
            <button class="cart-qty-plus" data-id="${item.id}">+</button>
          </div>
        </div>
      </div>
    `;
  });
  container.html(itemsHtml);

  const total = Cart.getTotal();
  summaryContainer.html(`
    <div class="cart-summary">
      <h3 data-i18n="cart_summary">${translations.cart_summary[currentLang]}</h3>
      <div class="cart-summary-row">
        <span data-i18n="cart_subtotal">${translations.cart_subtotal[currentLang]}</span>
        <span>$${total.toFixed(2)}</span>
      </div>
      <div class="cart-summary-row">
        <span data-i18n="cart_shipping">${translations.cart_shipping[currentLang]}</span>
        <span data-i18n="cart_shipping_free">${translations.cart_shipping_free[currentLang]}</span>
      </div>
      <div class="cart-summary-total">
        <span data-i18n="cart_total">${translations.cart_total[currentLang]}</span>
        <span class="price">$${total.toFixed(2)}</span>
      </div>
      <a href="checkout.html" class="btn-gold w-100 mt-4" style="text-align:center;">
        <span data-i18n="cart_checkout">${translations.cart_checkout[currentLang]}</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  `);

  bindCartEvents();
}

function bindCartEvents() {
  $('.cart-remove-btn').off('click').on('click', function() {
    const id = parseInt($(this).data('id'));
    const item = $(this).closest('.cart-item');
    item.css({ opacity: 0, transform: 'translateX(20px)', transition: '0.3s ease' });
    setTimeout(() => {
      Cart.remove(id);
      renderCartPage();
    }, 300);
  });

  $('.cart-qty-minus').off('click').on('click', function() {
    const id = parseInt($(this).data('id'));
    const item = Cart.items.find(i => i.id === id);
    if (item && item.qty > 1) {
      Cart.updateQty(id, item.qty - 1);
      renderCartPage();
    }
  });

  $('.cart-qty-plus').off('click').on('click', function() {
    const id = parseInt($(this).data('id'));
    const item = Cart.items.find(i => i.id === id);
    if (item) {
      Cart.updateQty(id, item.qty + 1);
      renderCartPage();
    }
  });
}

// ============ PAGE: CHECKOUT ============
function initCheckoutPage() {
  renderCheckoutPage();
}

function renderCheckoutPage() {
  const container = $('#checkout-order-items');
  const totalEl = $('#checkout-total');
  const countEl = $('#checkout-items-count');

  if (Cart.items.length === 0) {
    //window.location.href = 'cart.html';
    return;
  }

  let html = '';
  Cart.items.forEach(item => {
    const name = currentLang === 'ar' ? item.name_ar : item.name_en;
    html += `
      <div style="display:flex;gap:12px;align-items:center;padding:12px 0;border-bottom:1px solid var(--border-color);">
        <img src="${item.image}" alt="${name}" style="width:50px;height:50px;object-fit:cover;border-radius:8px;">
        <div style="flex:1;">
          <div style="font-size:14px;font-weight:500;color:var(--text-primary);">${name}</div>
          <div style="font-size:12px;color:var(--text-muted);">x${item.qty}</div>
        </div>
        <div style="font-weight:600;color:var(--gold);">$${(item.price * item.qty).toFixed(2)}</div>
      </div>
    `;
  });
  container.html(html);
  totalEl.text('$' + Cart.getTotal().toFixed(2));
  countEl.text(Cart.getCount() + ' ' + translations.checkout_items[currentLang]);
}

// ============ SCROLL REVEAL ============
function initScrollReveal() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
    observer.observe(el);
  });
}

// ============ BIND ADD TO CART ============
function bindAddToCart() {
  $(document).off('click', '.btn-add-cart').on('click', '.btn-add-cart', function(e) {
    e.preventDefault();
    const id = parseInt($(this).data('id'));
    const product = products.find(p => p.id === id);
    if (product) {
      Cart.add(product, 1);
      showToast(translations.added_to_cart[currentLang]);
    }
  });
}

// ============ DOCUMENT READY ============
$(document).ready(function() {
  // Loading screen
  setTimeout(function() {
    $('#loading-screen').addClass('hidden');
    setTimeout(function() {
      $('.page-wrapper').addClass('loaded');
    }, 100);
  }, 800);

  // Init theme
  setTheme(currentTheme);

  // Init language
  setLanguage(currentLang);

  // Init cart
  Cart.init();

  // Navbar scroll
  $(window).on('scroll', function() {
    const scrollTop = $(this).scrollTop();
    if (scrollTop > 50) {
      $('.navbar-main').addClass('scrolled');
    } else {
      $('.navbar-main').removeClass('scrolled');
    }

    // Scroll to top
    if (scrollTop > 400) {
      $('.scroll-top').addClass('visible');
    } else {
      $('.scroll-top').removeClass('visible');
    }
  });

  // Mobile toggle
  $('.mobile-toggle').on('click', function() {
    $(this).toggleClass('active');
    $('.mobile-menu').toggleClass('active');
  });

  // Language toggle
  $('.lang-btn').on('click', toggleLanguage);

  // Theme toggle
  $('.theme-toggle-btn').on('click', toggleTheme);

  // Scroll to top
  $('.scroll-top').on('click', function() {
    $('html, body').animate({ scrollTop: 0 }, 600);
  });

  // Ripple effect
  $(document).on('click', '.btn-gold, .btn-outline', function(e) {
    const ripple = $('<span class="ripple-effect"></span>');
    const rect = this.getBoundingClientRect();
    const x = e.pageX - rect.left;
    const y = e.pageY - rect.top;
    ripple.css({ left: x, top: y });
    $(this).append(ripple);
    setTimeout(() => ripple.remove(), 600);
  });

  // Bind add to cart globally
  bindAddToCart();

  // Product page specific: add to cart with qty
  $(document).on('click', '.btn-add-cart-product', function() {
    const id = parseInt($(this).data('id'));
    const product = products.find(p => p.id === id);
    const qty = parseInt($('#product-qty').val()) || 1;
    if (product) {
      Cart.add(product, qty);
      showToast(translations.added_to_cart[currentLang]);
    }
  });

  // Product qty controls
  $(document).on('click', '.qty-minus', function() {
    const input = $(this).siblings('input');
    let val = parseInt(input.val()) || 1;
    if (val > 1) input.val(val - 1);
  });

  $(document).on('click', '.qty-plus', function() {
    const input = $(this).siblings('input');
    let val = parseInt(input.val()) || 1;
    input.val(val + 1);
  });

  // Gallery thumbnails
  $(document).on('click', '.gallery-thumb', function() {
    const index = $(this).data('index');
    const product = getCurrentProduct();
    if (product) {
      $('#gallery-main-img').attr('src', product.images[index]);
      $('.gallery-thumb').removeClass('active');
      $(this).addClass('active');
    }
  });

  // Gallery zoom
  $(document).on('mousemove', '#gallery-main-img', function(e) {
    const rect = this.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width) * 100;
    const y = ((e.clientY - rect.top) / rect.height) * 100;
    $(this).css('transform-origin', x + '% ' + y + '%');
    $(this).addClass('zoomed');
  }).on('mouseleave', '#gallery-main-img', function() {
    $(this).removeClass('zoomed');
  });

  // Shop filters
  $(document).on('click', '.filter-btn', function() {
    $('.filter-btn').removeClass('active');
    $(this).addClass('active');
    shopFilter = $(this).data('filter');
    renderShopProducts();
  });

  // Shop sort
  $(document).on('change', '#shop-sort', function() {
    shopSort = $(this).val();
    renderShopProducts();
  });

  // Shop search
  let searchTimeout;
  $(document).on('input', '#shop-search', function() {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
      shopSearch = $(this).val().trim();
      renderShopProducts();
    }, 300);
  });

  // Product order form
  $(document).on('submit', '#quick-order-form', function(e) {
    e.preventDefault();
    const name = $(this).find('[name="name"]').val().trim();
    const phone = $(this).find('[name="phone"]').val().trim();
    if (!name || !phone) {
      showToast(currentLang === 'ar' ? 'يرجى ملء الحقول المطلوبة' : 'Please fill required fields');
      return;
    }
    showSuccessModal(translations.order_success_msg[currentLang]);
    this.reset();
  });

  // Checkout form
  $(document).on('submit', '#checkout-form', function(e) {
    e.preventDefault();
    const name = $(this).find('[name="name"]').val().trim();
    const phone = $(this).find('[name="phone"]').val().trim();
    const address = $(this).find('[name="address"]').val().trim();
    if (!name || !phone || !address) {
      showToast(currentLang === 'ar' ? 'يرجى ملء الحقول المطلوبة' : 'Please fill required fields');
      return;
    }
    Cart.clear();
    showSuccessModal(translations.success_title[currentLang], translations.success_desc[currentLang]);
    this.reset();
  });

  // Contact form
  $(document).on('submit', '#contact-form', function(e) {
    e.preventDefault();
    const name = $(this).find('[name="name"]').val().trim();
    const email = $(this).find('[name="email"]').val().trim();
    const message = $(this).find('[name="message"]').val().trim();
    if (!name || !email || !message) {
      showToast(currentLang === 'ar' ? 'يرجى ملء الحقول المطلوبة' : 'Please fill required fields');
      return;
    }
    showToast(translations.msg_sent[currentLang]);
    this.reset();
  });

  // Payment option select
  $(document).on('click', '.payment-option', function() {
    $('.payment-option').removeClass('selected');
    $(this).addClass('selected');
    $(this).find('input[type="radio"]').prop('checked', true);
  });

  // Set active nav link
  const page = getCurrentPage();
  $('.navbar-links a, .mobile-menu a').each(function() {
    const href = $(this).attr('href');
    if (href === page) {
      $(this).addClass('active');
    }
  });

  // Initialize page
  switch (page) {
    case 'index.html':
    case '':
      initHomePage();
      break;
    case 'shop.html':
      initShopPage();
      break;
    case 'product.html':
      initProductPage();
      break;
    case 'cart.html':
      initCartPage();
      break;
    case 'checkout.html':
      initCheckoutPage();
      break;
    default:
      initScrollReveal();
      break;
  }
});

function getCurrentProduct() {
  const params = new URLSearchParams(window.location.search);
  const id = parseInt(params.get('id'));
  return products.find(p => p.id === id);
}

function showSuccessModal(title, desc) {
  title = title || translations.success_title[currentLang];
  desc = desc || translations.success_desc[currentLang];
  let overlay = $('.success-overlay');
  if (!overlay.length) {
    overlay = $(`
      <div class="success-overlay">
        <div class="success-modal">
          <div class="success-icon"><i class="bi bi-check-lg"></i></div>
          <h3>${title}</h3>
          <p>${desc}</p>
          <a href="shop.html" class="btn-gold">${translations.success_btn[currentLang]}</a>
        </div>
      </div>
    `);
    $('body').append(overlay);
  } else {
    overlay.find('h3').text(title);
    overlay.find('p').text(desc);
  }
  overlay.addClass('active');
  overlay.off('click').on('click', function(e) {
    if ($(e.target).hasClass('success-overlay')) {
      $(this).removeClass('active');
    }
  });
}