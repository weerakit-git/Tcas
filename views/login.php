<?php
    session_start();
    session_destroy();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login Page</title>    

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    
    <form class="form-signin" action="../functions/login_function.php" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="../assets/images/KU_Logo.png" alt="" width="100">
        <h1 class="h3 mb-3 font-weight-normal" style="font-weight:800; color:#006664">รับสมัครนิสิตใหม่ ปี 2566</h1>
        <p>Kasetsart University<br>Chalermphrakiat Sakon Nakhon Province Campus</p>
      </div>

      <div class="form-label-group">
        <input type="text" name="inputNationalID" id="inputNationalID" class="form-control" placeholder="National ID" required autofocus>
        <label for="inputNationalID">National ID</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="inputTCASRound" value="1" id="inputTCASRound1" checked>
        <label class="form-check-label" for="inputTCASRound1">
            TCAS1
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="inputTCASRound" value="2" id="inputTCASRound2">
        <label class="form-check-label" for="inputTCASRound2">
            TCAS2
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="inputTCASRound" id="inputTCASRound3" disabled>
        <label class="form-check-label" for="inputTCASRound3">
            TCAS3
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="inputTCASRound" value="4" id="inputTCASRound4">
        <label class="form-check-label" for="inputTCASRoun4">
            TCAS4
        </label>
      </div>

      <div style="padding-top:18px;">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
      </div>
      <p class="mt-5 mb-3 text-muted text-center">CIS@2023</p>
    </form>
  </body>
</html>
