<?php
if(isset($_POST['generate-btn'])) {
    $name = $_POST['std-name'];
    $phone = $_POST['std-phone'];
    $email = $_POST['std-email'];
    $course = $_POST['std-course'];
    $batchno = $_POST['std-batch'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equip="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identity Cara
                 | PHP
    </title>
</head>

    <body>
    <body class='bg-grid-line'></body>
    <div class='card'>
        <header>
            <h1>Sbwebcare SID</h1>
      </header>
      <article>
        <img alt=' My Pic ' id=' thumb ' src=' h '>
        <h2><?php if(isset($name)) {echo $name;}?></h2>
        <div class= 'area'>
        <h3>Course- <?php if(isset($course)) {echo $course;} ?></h3>
        <ul>
            <li>
                    Phone-  <?php if(isset($phone)) {echo $phone;} ?>
            </li>
                <li>
                Email-<?php if(isset($email)) {echo $email;}?>
                </li>
                <li>
                    Batch No -<?php if(isset($batchno)) {echo $batchno;}?>
                </li>

        </ul>


      </article>


<?php
   
   if(isset($_POST['btn'])){
        $username = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
?>

<h2>Username-  <?php if(isset($username)){
        echo $username;
    }  ?></h2>
    <h2>Email-  <?php if(isset($email)){
        echo $email;
    }  ?></h2>
     <h2>Password-  <?php if(isset($password)){
        echo $password;
    }  ?></h2>

</html>