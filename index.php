<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {

            font: italic small-caps bold 12px/30px Georgia, serif;
  background-image: url("https://img.freepik.com/free-vector/3d-perspective-style-diamond-shape-white-background_1017-27556.jpg?size=626&ext=jpg");
}
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

    echo '<h1>Thankyou!</h1>';


    echo'<h4>As per your information:</h4>';
    
    $Name= $_POST['Name'];
    echo 'The name:  '.$Name."<br>"."<br>";

    $Address= $_POST['Address'];
    echo 'The Address :   '.$Address."<br>"."<br>";

    $phonenumber= $_POST['phonenumber'];
    echo 'The Phone number : '.$phonenumber."<br>"."<br>";

    $EmailID= $_POST['EmailID'];
    echo 'The Email-ID : '.$EmailID."<br>"."<br>";

    $Emergencycontactnumber= $_POST['Emergencycontactnumber'];
    echo 'Emergency contact number:'.$Emergencycontactnumber."<br>"."<br>";

    $Birthdate= $_POST['Birthdate'];
    echo 'Birth Date :  '.$Birthdate."<br>"."<br>";


   // $EmployeeType= $_POST['EmployeeType'];
    //secho 'Employee Type: '.$EmployeeType."<br>"."<br>";

    if(isset($_REQUEST['male'])){
      echo 'Gender: male'.$_REQUEST['male']."<br>";
  }else
  echo 'Gender:Female'."<br>";
    
    ?>
    <a href="form.html">RESET</a>
</body>
</html>