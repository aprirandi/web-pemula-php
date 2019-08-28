<?php session_start();
if(isset($_SESSION['email'])) {
header('location:index.php'); }
require_once("koneksi.php");
?>

<!DOCTYPE html5>
<html>
<head>
        <title>FUN TRAVELS</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="img/LOGO.png"/>
        <! CSS FRAMEWORK>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <img src="img/LOGO.png" width="100px" weight="100px"/>
    </nav>
        <br>
            <div class="col-md-6">
                <div class="panel panel-primary">
                <div class="panel-heading" style="text-align:center">Sign In Account</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="proses_tambah.php">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        <input type="submit" class="btn btn-info" role="button" value="Sign in">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <img src="img/Losari.jpg" width="540px">
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align:center">Contact Us</div>
                        <div class="panel-body">
                            <h3 style="text-align:center">Contact us 0838-7313-4951 (MIU)</h3>
                            <hr>
                            <h4 style="text-align:center">Layanan (24 jam) : Informasi - Keluhan - Saran</h4>
                        </div>
                    <hr>
                    <a>_____________________________________________________________</a>
                    <a href="http://www.facebook.com/"><img src="img/fb.png" width="50px"/></a>
                    <a href="http://www.twitter.com/"><img src="img/twitter.png" width="50px"/></a>
                    <a>_______________________________________________________________</a>
                </div>
            </div>
</body>
</html>