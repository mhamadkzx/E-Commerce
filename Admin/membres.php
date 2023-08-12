<?php
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   ----- Manage Members page                          ------
   ----- You Can Add | Edit | Dlete Memebres Of Here  ------
   +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   */
   session_start () ;
   $TitlePage = 'Menbres';
    if(isset($_SESSION['Username'])){

         include "init.php";
         $do = isset($_GET['do'])? $_GET['do'] : 'Manage';

         //the Start manage page

         if ($do == 'Manage'){

            //manage page



         } 
         elseif ($do == 'Edit'){ //Edit page
?>
           
            <h1 class ="text-center"> <?php echo lang('EIDT-MEMBER')?></h1>
            <div class = "container" >
                <from class = "from-horizontal" >
                    <!-- Stsrt username field-->
                    <div class = "from-group">
                        <label class = "col-sm-2 control-label"><?php echo lang('USERNAMELABLE')?></label>
                        <div class = col-sm-10>
                        <input type = "text" name ="user" class = "form-control" />
                        <!-- end username field-->

                        <!-- Stsrt password field-->
                   
                        <label class = "col-sm-2 control-label"><?php echo lang('PASSWORD')?></label>
                        
                        <input type = "password" name ="pass" class = "form-control" />
                        <!-- end password field-->
                        <!-- Stsrt fullname field-->
                        
                        <label class = "col-sm-2 control-label"><?php echo lang('FULLUSERNAME')?></label>
                        
                        <input type="text" class="form-control">
                        <!-- end fullname field-->
                        <!-- Stsrt email field-->
                    
                        <label class = "col-sm-2 control-label"><?php echo lang('EMAIL')?></label>
                        
                        <input type = "email" name ="email" class = "form-control" />
                        <!-- end email field-->
                    <!-- Stsrt fullname field-->
                    
                        <div class = col-sm-10>
                        <button type="submit" class="btn btn-primary"><?php echo lang('SAVE')?></button>
                        <!-- end username field-->
                        
                        </div>
                    </div>
                </from>
            </div>

           <?php
           }

        include $tpl . "footer.php";

   }
   else {

    header('Location: index.php');
    
    exit;

   }

?>