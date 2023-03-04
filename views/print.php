<?php 
    session_start();
    // print_r( $_SESSION['app_data'] )
    
    if(!isset($_SESSION['new_national_id'])){
        header("Location: ../views/login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าปริ้น</title>

    <!-- CSS MAIN NOT CONNECT -->
    <link rel="stylesheet" href="../assets/css/main.css" media="print">
    <!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

<!-- Bootstrap core CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../assets/css/form-validation.css" rel="stylesheet">
</head>
<body> 
    
        <div class="container">

        <!-- section-one start-->
                 <div class="container-section" style="text-align: center;">
                       <div class="section-logo">
                            <img  style=" filter: grayscale(100%); margin:1rem;" src="../assets/images/logo.png" alt="" width=150px >
                        </div>
                        <div class="section-text" >
                            <p>ใบสมัคร</p>
                            <p>การคัดเลือกเข้าศึกษาต่อในมหาวิทยาลัยเกษตรศาสตร์</p>
                            <p>วิทยาเขตเฉลิมพระเกีตรติ จังหวัดสกลนคร</p>
                            <p>ประจำปีการศึกษา 2566 รอบที่ 1 (โครงการขยายโอกาศทางการศึกษา)</p>
                        </div>
                </div>
         <!-- section-one end-->

            <br>
         <!-- section-two start-->
         <div class="section-info"  >
           
            <p>เลขประจำตัวประชาชน <?php echo $_SESSION['national_id']?> &nbsp;&nbsp;&nbsp;ชื่อ - นามสกุล <?php echo $_SESSION['app_data']['Fristname_TH']." ".$_SESSION['app_data']['lastname_TH']  ?> </p>
            <p>วัน เดือน ปีเกิด <?php echo $_SESSION['app_data']['Birthday']?> &nbsp;&nbsp;&nbsp;สัญชาติ <?php echo $_SESSION['app_data']['Ethnicity']?>. &nbsp;&nbsp;&nbsp;เชื้อชาติ <?php echo $_SESSION['app_data']['Nationality']?> &nbsp;&nbsp;&nbsp;ศาสนา <?php echo $_SESSION['app_data']['Region']?></p>
            <p>บ้านเลขที่ <?php echo $_SESSION['app_data']['Address']?>&nbsp;&nbsp;&nbsp; ตำบล <?php echo $_SESSION['app_data']['sub_District']?> &nbsp;&nbsp;&nbsp;อำเภอ <?php echo $_SESSION['app_data']['District'] ?>&nbsp;&nbsp;&nbsp; จังหวัด <?php echo $_SESSION['app_data']['Province']?> <?php echo $_SESSION['app_data']['Zipcode'] ?></p>
            <p>โทรศัพท์มือถือ <?php echo $_SESSION['app_data']['Telephone']?> &nbsp;&nbsp;&nbsp;e-mail <?php echo $_SESSION['app_data']['Email'] ?></p>
           
        </div>
        <!-- section-two end-->

         <!-- section-three start-->
        <div class="section-education">
        <h5>ข้อมูลการศึกษา</h5>
            <p>ผลการเรียนเฉลี่ยสะสม ม.6 ( <?php echo$_SESSION['app_data']['Study_plan']?> )  รวมเป็น <?php echo $_SESSION['app_data']['GPA_total']?></p>
            <p>ชื่อโรงเรียน <?php echo $_SESSION['app_data']['high_school_name']?></p>
            <h5>สมัครเข้าศึกษา <?php echo $_SESSION['app_data']['major_id'] ?></h5>
        </div>
        <!-- section-three end-->

        <div class="section-sum">
            <h5>หลักสูตร <?php echo $_SESSION['app_data']['major_id'] ?></h5>
            <p>ข้าพเจ้าขอรับรองว่ามีคุณสมบัติครบตามประกาศการรับสมัครมหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกีตรติ <p>
            <p>จังหวัดสกลนคร ทุกประการ หากตรวจสอบในภายหลังพบว่าขาดคุณสมบัติ ข้าพเจ้ายินดีให้มหาวิทยาลัยตัดสิทย์ใน <p>
             <p>การเข้าศึกษา โดยไม่มีข้ออุทรธรณ์ใดๆ ทั้งสิ้น</p>
        </div>



        <div class="container-name-studen" style="margin-top:2rem;   text-align:end;">
                <!-- <div class="flex-name-studen" style="text-align:center;"> -->
                <p>ลงชื่อ <?php echo $_SESSION['app_data']['Fristname_TH']." ".$_SESSION['app_data']['lastname_TH']  ?>    ผู้สมัคร</p>
            <p>( <?php echo $_SESSION['app_data']['Fristname_TH']." ".$_SESSION['app_data']['lastname_TH']  ?>  )</p>
            <p>Date</p>
                <!-- </div> -->
          
        </div>






         </div>








       
        <button type="button" name="button" id="print" onclick="window.print();">Print</button>
</body>
</html>