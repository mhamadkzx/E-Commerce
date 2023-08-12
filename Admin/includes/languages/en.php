<?php
function lang($phrase) {
    static $lang = array (
        //LOGIN PAGE
        'ADMIN_LOGIN'     => 'Login',
        'PASSWORD'        => 'Psaaword',
        'LOGIN'           => 'Login',
        'USERNAME'        => 'Username',
        //NAVBAR WORDS
        'HOME'            => 'Home',
        'CATEGORIES'      => 'Categories',
        'ITEMS'           => 'Itms',
        'MEMBERS'         => 'Members',
        'STATISTICS'      => 'Staistics',
        'LOGS'            => 'Logs',
        'WELCOME'         => 'Welcom',
        //NAVBAR.dropdown-menu WORDS
        'LOGUOUT'         => 'Loguot',


    );

    return $lang[$phrase];
}