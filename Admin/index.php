<?php
   session_start () ;
   $TitlePage = 'Admin';
   if(isset($_SESSION['Username'])){
    header('Location:dashboerd.php');
   }
    $NoNavnar = '';
    include "init.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //check if user coming to from request  POST
        $username = $_POST['user'];
        $passeord = $_POST['pass'];
        $hashedPass =sha1($passeord);

        //
        $stmt = $con->prepare("SELECT
                               UserID, Username, Password
                               FROM 
                                 users
                               WHERE
                                Username = ?
                               AND
                                  Password = ?
                               AND
                                 GroupID = 1
                                LIMIT 1 ");
        $stmt->execute(array($username, $hashedPass));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        if ($count > 0) {

            $_SESSION['Username'] = $username; //Regster session name
            $_SESSION['ID'] = $row['UserID'];  //Regster session ID
            header('Location: dashboerd.php');
            exit();

        }

    }
    ?>

    <form class = "login" action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST" >
        <h4 class ='text-center' ><?php echo lang ('ADMIN_LOGIN') ?></h4>
        <input class ="form-control" type = "text" name = "user" placeholder = <?php echo lang('USERNAME')?>  autocmplete = "off"  />
        <input class ="form-control" type = "password" name = "pass" placeholder = <?php echo lang("PASSWORD")?> autocmplete = "new-password"  />
        <input class ="btn btn-primary  btn-block " type = "submit" value = <?php echo lang('LOGIN')?> />

    </form>
<?php 
    include $tpl . "footer.php";
?>