<?php
session_start();
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
$trx_id = $_GET["tx"];
$p_st = $_GET["st"];
$amt = $_GET["amt"];
$cc = $_GET["cc"];
$cm = $_GET["cm"];
$c_amt = $_COOKIE["ta"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ABC Store</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <style>
            table tr td {padding:10px;}
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">	
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"><marquee >ABC Store</marquee></a>
                </div>
                <div class="col-md-10"></div>
                <ul class="nav navbar-nav">
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi," . $_SESSION["name"]; ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
                            <li class="divider"></li><li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <p><br/></p>
        <p><br/></p>
        <p><br/></p>
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <h1>Thankyou </h1>
                            <hr/>
                            <p>Hello <?php echo $_SESSION["name"]; ?>,Your payment process is 
                                successfully completed and your Transaction id is<b></b><br/>
                                you can continue your Shopping <br/></p>
                            <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="copyright-wthree" style="width: 100%; text-align: center;background: lightblue;padding: 10px 0px; position: fixed;
                            bottom: 0;">
            <p> All Rights Reserved | Design by <a href="#"target="_blank">Lahiru</a></p>

            <a target="_blank" title="find us on Facebook" href="#"><img alt="follow me on facebook" src="//login.create.net/images/icons/user/facebook_30x30.png" border=0></a>
            <a target="_blank" title="follow me on instagram" href="#"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a>
            <a target="_blank" title="follow me on twitter" href="#"><img alt="follow me on twitter" src="//login.create.net/images/icons/user/twitter_30x30.png" border=0></a>	

        </div>
    </body>
</html>
















































