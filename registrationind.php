<html>
  <head>
    <title>Registration Form</title>
    <link rel=wrel="stylesheet">
    <style>
      html, body {w
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("pixabay.com/images/id-83206/") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 10px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(237, 237, 237, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.8); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 0px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
<body>
    <div class="main-block">
      
      
<div>
      <form method="post">
        <div class="title">
          
          <h2>Registration Form</h2>
            
        </div>
        <div class="info">
            <?php 
                if (isset($_GET['userexists'])){
                    echo '<h3> Error: UserID Already Exists</h3>';
                }
            ?>
          <input class="fname" type="text" name="name" placeholder="Name" required>
          <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="userid" placeholder="Username" required>
          <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="phone" placeholder="Phone number" required>
         <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="city" placeholder="City" required>
         <input type="text" name="proof" placeholder="Aadhar card number" required>
        </div>
        
        <button type="submit">Submit</button>
      </form>
    </div>
  
</div></body>
</html>

<?php
    $host="localhost";
    $user="ecodetnt";
    $password="ecode11213";
    $db="trackntrace";

    $conn = new mysqli($host, $user, $password, "trackntrace");
    
    if(isset($_POST['name'])){
        
        $userid = $_POST['userid'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $proof = $_POST['proof'];
        
        $sql="select * from users where userid='".$userid."' limit 1";
        $result=mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result)==1){
            header('Location: registrationind.php?userexists=true');
            exit();
        }
        
        $sql="INSERT INTO users (userid, password, name, usertype, email, phone, address, city, proof) VALUES ('$userid', '$password', '$name', '1', '$email', '$phone', '$address', '$city', '$proof')";
        
        mysqli_query($conn, $sql); 
        
        header('Location: index.php');
        exit();
        
    }
?>