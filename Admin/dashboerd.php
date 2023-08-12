<?php
   session_start () ;
   $TitlePage  = 'dashboerd';
    if(isset($_SESSION['Username'])){

         //echo 'welcome ' . $_SESSION['Username'];

         include "init.php";

        include $tpl . "footer.php";

   }
   else {

    header('Location: index.php');
    
    exit;

   }

?>