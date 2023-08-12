<?php
function lang($phrase) {
    static $lang = array (
        'ADMIN_LOGIN'     =>  'تسجيل الدخول',


    );

    return $lang[$phrase];
}