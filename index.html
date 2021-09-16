<head>
    <title>Affinity TracknTrace</title>
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
      margin: 0 0 0 8px;
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
      margin-top: 20px;
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
      <form method="post" action=""> 
        <div class="title">
        <h2>Login Details </h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="username" placeholder="Enter username">
          <input type="password" name="password" placeholder="Password">
        </div>
        <button type="submit">Submit</button>
      </form>
      <button onClick="window.location='registration.php';">Click Here to Register</button>
    </div>
  </div>
</body>
</html>


<?php 

    $host="localhost";
    $user="ecodetnt";
    $password="ecode11213";
    $db="trackntrace";

    $conn = new mysqli($host, $user, $password, "trackntrace");
    session_start();

    if(isset($_POST['username'])){
    
        $usrname=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from users where userid='".$usrname."'AND password='".$password."' limit 1";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)==1){
            $serialnumb = $_GET['serial'];
            $sql="select * from tnt_packs where snumber='".$serialnumb."' limit 1";
            $checkserial = mysqli_query($conn, $sql);
            $sql="select usertype from users where userid='".$usrname."' ";
            $usrtype = mysqli_fetch_array(mysqli_query($conn, $sql));
            
            if(mysqli_num_rows($checkserial)!=1 && $usrtype['usertype'] == '3'){
                $sql="select city from users where userid='".$usrname."' ";
                $loc = mysqli_fetch_array(mysqli_query($conn, $sql));
                $locf = $loc['city'];
                $date = date('Y-m-d');
                $sqlt="INSERT INTO tnt_packs (snumber, status, orgstate, usrstate, state, shipdate, expid, exploc) VALUES ($serialnumb, 'IN_TRANSIT', '0', '0', '1', '$date', '$usrname', '$locf')";
                mysqli_query($conn, $sqlt); 
            }
            
            if(mysqli_num_rows($checkserial) ==1 && $usrtype['usertype'] != '3'){
                $date = date('Y-m-d');
                
                $sql="select orgstate from tnt_packs where snumber='".$serialnumb."' ";
                $orgst = mysqli_fetch_array(mysqli_query($conn, $sql));
                $sql="select usrstate from tnt_packs where snumber='".$serialnumb."' ";
                $usrst = mysqli_fetch_array(mysqli_query($conn, $sql));
                
                $sql="select city from users where userid='".$usrname."' ";
                $loc = mysqli_fetch_array(mysqli_query($conn, $sql));
                
                if($usrtype['usertype'] == '1' && $usrst['usrstate'] == "0"){
                    $sql="UPDATE tnt_packs SET status = 'Delivered', usrstate = '1', usrid = '".$usrname."', usrloc = '".$loc['city']."', state = '3', usrdate = '".$date."' WHERE snumber = '".$serialnumb."' ";
                    mysqli_query($conn, $sql);
                }
                
                else if($usrtype['usertype'] == '1' && $usrst['usrstate'] == "0"){
                         $sql="UPDATE tnt_packs SET status = 'RETURNED', usrstate = '2', usrid = '".$usrname."', usrloc = '".$loc['city']."', state = '3', usrdate = '".$date."' WHERE snumber = '".$serialnumb."' ";
                         mysqli_query($conn, $sql);
                }
                
                if($usrtype['usertype'] == '2' && $orgst['orgstate'] == "0"){
                    $sql="UPDATE tnt_packs SET status = 'Delivered', orgstate = '1', orgid = '".$usrname."', orgloc = '".$loc['city']."', state = '2', orgdate = '".$date."' WHERE snumber = '".$serialnumb."' ";
                    mysqli_query($conn, $sql);
                }
                
                else if($usrtype['usertype'] == '2' && $orgst['orgstate'] == "0"){
                          $sql="UPDATE tnt_packs SET status = 'Delivered', orgstate = '1', orgid = '".$usrname."', orgloc = '".$loc['city']."', state = '2', orgdate = '".$date."' WHERE snumber = '".$serialnumb."' ";
                          mysqli_query($conn, $sql);
                }
            }
            
            //$sql = "select id from users where userid='".$usrname."' ";
            //$test=mysqli_query($conn, $sql);
            //$usid = mysqli_fetch_array($test);
            //$url = "success.php?id=" . $usid['id'];
            
            $_SESSION['uid'] = $usrname;
            //$url = "success.php?uid=" . $usrname;
            $url = "allshipments.php";
            header('Location: ' . $url);
            
            //echo " You Have Successfully Logged in";
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }
        
    }
?>