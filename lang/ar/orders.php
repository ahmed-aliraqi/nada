<?php

return [
    'singular'          => 'الطلب',
    'plural'            => 'الطلبات',
    'empty'             => 'لا توجد طلبات حتى الآن.',
    'empty_cart'        => 'سلة التسوق فارغة.',
    'placed_successfully' => 'تم تقديم طلبك بنجاح.',
    'attributes'        => [
        'id'             => 'رقم الطلب',
        'full_name'      => 'الاسم الكامل',
        'phone'          => 'رقم الهاتف',
        'email'          => 'البريد الإلكتروني',
        'address'        => 'العنوان',
        'delivery_notes' => 'ملاحظات التوصيل',
        'subtotal'       => 'المجموع الفرعي',
        'shipping_price' => 'الشحن',
        'discount'       => 'الخصم',
        'total'          => 'المجموع الكلي',
        'status'         => 'الحالة',
        'created_at'     => 'التاريخ',
    ],
    'statuses'          => [
        'pending'    => 'قيد الانتظار',
        'confirmed'  => 'مؤكد',
        'processing' => 'جاري التجهيز',
        'shipped'    => 'تم الشحن',
        'delivered'  => 'تم التسليم',
        'cancelled'  => 'ملغى',
    ],
    'actions'           => [
        'list'          => 'جميع الطلبات',
        'show'          => 'عرض الطلب',
        'update_status' => 'تحديث الحالة',
    ],
    'messages'          => [
        'status_updated' => 'تم تحديث حالة الطلب بنجاح.',
    ],
];
