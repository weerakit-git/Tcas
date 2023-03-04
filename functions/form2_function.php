


<?php
    session_start();
    require('../config.php');
    // print_r( $_POST );
 

    $selected_Study_plan = $_POST['Study_plan'];
    if( $selected_Study_plan == -1 ){
        $selected_Study_plan = $_POST['other_Study_plan'];
    } 
    $sql_query = " SELECT * FROM `application` WHERE `Ntion_ID` = '".$_SESSION['new_national_id']."' AND `TCAS` = ".$_SESSION['TCAS_round']." ;  ";
    $result = $mysqli->query($sql_query);
    $record_number = mysqli_num_rows( $result );

    if( $record_number == 1 ){
    $update_sql = " UPDATE `application` SET  `high_school_name` =  '".$_POST['high_school_name']."',
                                            `Educational_qualification` =  '".$_POST['Educational_qualification']."',
                                            `Study_plan` =  '".$_POST['Study_plan']."',
                                            `GPA_total` =  '".$selected_Study_plan."',
                                            `major_id` =  '".$_POST['major_id']."'
                                            WHERE Ntion_ID = '".$_SESSION['new_national_id']."' ;";
     // echo $update_sql;
     $mysqli->query($update_sql);
    }
     header("Location: ./print_function.php");

?>