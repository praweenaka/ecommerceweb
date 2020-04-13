<?php
session_start();
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
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
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">	
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                        <span class="sr-only">navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php" class="navbar-brand"><marquee >ABC Store</marquee></a>
                </div>
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav"></ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                            <div class="dropdown-menu" style="width:400px;">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3">No</div>
                                            <div class="col-md-3 col-xs-3">Product Image</div>
                                            <div class="col-md-3 col-xs-3">Product Name</div>
                                            <div class="col-md-3 col-xs-3">Price in $.</div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div id="cart_product">
                                        </div>
                                    </div>
                                    <!--<div class="panel-footer"></div>-->
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi," . $_SESSION["name"]; ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <p><br/></p>
        <p><br/></p>
        <p><br/></p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="cart_msg">
                    <!--Cart Message--> 
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Cart Checkout</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2 col-xs-2"><b>Action</b></div>
                                <div class="col-md-2 col-xs-2"><b>Product Image</b></div>
                                <div class="col-md-2 col-xs-2"><b>Product Name</b></div>
                                <div class="col-md-2 col-xs-2"><b>Quantity</b></div>
                                <div class="col-md-2 col-xs-2"><b>Product Price</b></div>
                                <div class="col-md-2 col-xs-2"><b>Price in $</b></div>
                            </div>
                            <div id="cart_checkout"></div>
                        </div> 
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>

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
















