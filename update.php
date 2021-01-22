<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" 
crossorigin="anonymous">
<style>
    .jumbotron{
        width:70%;
        margin: 10% auto;
        display: flex;
        justify-content: center;
        border: 0.08em solid black;
    }
    </style>
</head>


<?php 

require_once 'connect.php';

if($_POST) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	$teamsize = $_POST['team_size'];

	$sql = "INSERT INTO booking (name, email, phoneno, teamsize) VALUES ('$name', '$email', '$phoneno', '$teamsize')";
	if($connect->query($sql) === TRUE) {
        ?>
          <div class="jumbotron">
          <h1 class="display-4">Successfully  Details is Added!</h1>
          <div class="col-md-4">
         
          <a href='index.html'><button class = 'btn btn-warning ' type='button'>Home</button></a>
                </div>
        <?php
        } else {
            echo "Error " ;
        }
        
        ?>
    </div>
    <?php
        $connect->close();
    }
    
    ?>
    </html>