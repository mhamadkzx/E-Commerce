<?php
function lang($phrase) {
    static $lang = array (
        //LOGIN PAGE
        'ADMIN_LOGIN'     => 'تسجيل الدخول',
        'PASSWORD'        => "كلمة المرور",
        'LOGIN'           => 'تسجيل الدخول',
        'USERNAME'        => 'اسم المستخدم',





        //NAVBAR WORDS
        'LOGUOUT'         => 'تسجيل الخروج',


    );

    return $lang[$phrase];
}