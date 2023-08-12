<?php
     // Connected to db

          include 'Connection.php' ;  

     // Routes

          $tpl = 'includes/templets/'; // Templets Directoy
          $css = 'layout/css/';       //  css Directoy
          $js  = 'layout/js/';       //   js Directoy
          $fontawesome = 'layout/fontawesome/css/' ;//   file fontawesome Directoy
          $bootstrapcss = 'layout\bootstrap/css/';
          $bootstrapjs = 'layout\bootstrap/js/';
          $lang = 'includes/languages/'; // languages Directoy         

     // Impoert ilnk

          include $lang . 'ar.php';
          include $tpl . 'header.php';


     // 

          if(!isset($NoNavnar)){

          include $tpl . 'navbar.php';
               
          }
     //
     



?>