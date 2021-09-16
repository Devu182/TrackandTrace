<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_SESSION["uid"])){
        header("location: index.php");
    }

    if (isset($_GET['logout']))
    {
        setcookie(session_name(), '', 100);
        session_unset();
        session_destroy();
        $_SESSION = array();
        
        
        header("location: index.php");
    }
?>

<html lang="en">
<head>
	<title>All Shipments</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
    
    
    <!--=====================================HEADER NAV BAR START=======================================-->
<body>
    
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">Affinity- TnT</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="allshipments.php"><span>Home</span></a></li>
                <li><a href="myshipments.php"><span>My Shipments</span></a></li>
                <li><a href="?logout=true"><span>Logout</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      
    </header>
    
    
    <!--=========================================TABLE START===========================================-->
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Serial Number</th>
								<th class="column2">Status</th>
								<th class="column3">Last Update</th>
							</tr>
						</thead>
						<tbody>

								<?php
                                    $host="localhost";
                                    $user="ecodetnt";
                                    $password="ecode11213";
                                    $db="trackntrace";

                                    $conn = new mysqli($host, $user, $password, "trackntrace");
                                    $sql = $sql="select * from tnt_packs ";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<tr>';
                                        echo '<td class = "column1"><a href=shipmentinfo.php?serial='.$row['snumber'].'>'.$row['snumber'].'</a></td>';
                                        
                                        if($row['state'] == "1")
                                            echo '<td class = "column2">'.$row['status'].'</td>';
                                        if($row['state'] == "2")
                                            echo '<td class = "column2">'.$row['status'].' - '.$row['orgloc']. '</td>';
                                        if($row['state'] == "3")
                                            echo '<td class = "column2">'.$row['status'].' - '.$row['usrloc']. '</td>';
                                        
                                        if($row['state'] == "1")
                                            echo '<td class = "column3">'.$row['shipdate'].'</td>';
                                        if($row['state'] == "2")
                                            echo '<td class = "column3">'.$row['orgdate'].'</td>';
                                        if($row['state'] == "3")
                                            echo '<td class = "column3">'.$row['usrdate'].'</td>';
                                        echo '</tr>';
                                    }
                                ?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>