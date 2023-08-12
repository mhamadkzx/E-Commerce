<?php
function lang($phrase) {
    static $lang = array (
        //LOGIN PAGE
        'ADMIN_LOGIN'     => 'تسجيل الدخول',
        'PASSWORD'        => "كلمة المرور",
        'LOGIN'           => 'تسجيل الدخول',
        'USERNAME'        => 'اسم المستخدم',
        //NAVBAR WORDS
        'HOME'            => 'الرئيسية',
        'CATEGORIES'      => 'الفئات',
        'ITEMS'           => 'الادوات',
        'MEMBERS'         => 'الاعضاء',
        'STATISTICS'      => 'الإحصائيات',
        'LOGS'            => 'السجلات',
        'WELCOME'            => 'مرحباً',
        //NAVBAR.dropdown-menu WORDS
        'LOGUOUT'         => 'تسجيل الخروج',


    );

    return $lang[$phrase];
}