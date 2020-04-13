<?php
session_start();
//if (isset($_SESSION["uid"])) {
//    header("location:profile.php");
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ABC Store</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <style>
            @media screen and (max-width:480px){
                #search{width:80%;}
                #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
            }
        </style>
       
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
                    <ul class="nav navbar-nav">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li style="width:460px;left:10px;top:10px;"><input type="text" class="form-control" id="search" placeholder="Search"></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        include 'db.php';


                        if (isset($_SESSION['name']) == true) {
                            echo"<li><a href =\"#\" class = \"dropdown-toggle\" data-toggle = \"dropdown\"><span class = \"glyphicon glyphicon-shopping-cart\"></span>Cart<span class = \"badge\">0</span></a>";
                            echo" <div class = \"dropdown-menu\" style = \"width:550px;\">";
                            echo" <div class = \"panel panel-success\">";
                            echo" <div class = \"panel-heading\">";
                            echo" <div class = \"row\">";
                            echo" <div class = \"col-md-1\">No</div>";
                            echo" <div class = \"col-md-3\">Product Image</div>";
                            echo" <div class = \"col-md-4\">Product Name</div>";
                            echo" <div class = \"col-md-3\">Price in $.</div>";
                            echo" <div class = \"col-md-1\"></div>";
                            echo" </div>";
                            echo" </div>";
                            echo"<div class = \"panel-body\"></div>";
                            echo"<div id=\"cart_product\"></div>";
                            echo" </div>";
                            echo"  </div>";
                            echo" </li>";

                            if ($_SESSION["name"] === "admin") {
                                echo"<li><a href=\"item.php\"><span class=\"glyphicon glyphicon-home\"></span>Item Add</a></li>";
                                echo"<li><a href=\"cat.php\"><span class=\"glyphicon glyphicon-home\"></span>Category Add</a></li>";
                                echo"<li><a href=\"brand.php\"><span class=\"glyphicon glyphicon-home\"></span>Brand Add</a></li>";
                            } else {
                                
                            }
                            echo"<li><a href = \"#\" class = \"dropdown-toggle\" data-toggle = \"dropdown\"><span class = \"glyphicon glyphicon-user\"></span>Hi," . $_SESSION['name'] . "</a>";
                            echo"<ul class = \"dropdown-menu\">";
                            echo"<li><a href = \"cart.php\" style = \"text-decoration:none; color:blue;\"><span class = \"glyphicon glyphicon-shopping-cart\">Cart</a></li>";
                            echo" <li class = \"divider\"></li>";
                            echo"<li><a href = \"logout.php\" style = \"text-decoration:none; color:blue;\">Logout</a></li>";
                            echo"</ul>";
                            echo"</li>";
                        } else {
                            echo" <li><a href = \"#\" class = \"dropdown-toggle\" data-toggle = \"dropdown\"><span class = \"glyphicon glyphicon-user\"></span>SignIn</a>";
                            echo" <ul class = \"dropdown-menu\">";
                            echo" <div style = \"width:300px;\">";
                            echo"<div class = \"panel panel-primary\">";
                            echo" <div class = \"panel-heading\">Login</div>";
                            echo" <div class = \"panel-heading\">";
                            echo" <label for = \"email\">Email</label>";
                            echo" <input type = \"email\" class = \"form-control\" id = \"email\" required/>";
                            echo" <label for = \"email\">Password</label>";
                            echo" <input type = \"password\" class = \"form-control\" id = \"password\" required/>";
                            echo" <p><br/></p>";
                            echo" <a href = \"#\" style = \"color:white; list-style:none;\">Forgotten Password</a><input type = \"submit\" class = \"btn btn-success\" style = \"float:right;\" id = \"login\" value = \"Login\">";
                            echo" </div>";
                            echo" </div>";
                            echo"</div>";
                            echo" </ul>";
                            echo" </li>";

                            echo" <li><a href = \"customer_registration.php\"><span class = \"glyphicon glyphicon-user\"></span>SignUp</a></li>";
                        }
                        ?>



                    </ul>
                </div>
            </div>
        </div>	
        <p><br/></p>
        <p><br/></p>
        <p><br/></p>

        <!--<div class="container-fluid">-->
        <div class="row " style="margin-left: 2%;margin-right: 2%;">
            <!--<div class="col-md-1"></div>-->
            <div class="col-md-2 col-xs-12">
                <div id="get_category">
                </div>
                <div id="get_brand">
                </div>
            </div>
            <div class="col-md-10 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12" id="product_msg">
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading  "> 
                        <marquee behavior="alternate" direction="up" width="80%" height="10%">
                            <marquee direction="right" behavior="alternate">Products</marquee>
                        </marquee>
                    </div>
                    <div class="panel-body">
                        <div id="get_product">

                        </div>

                    </div>

                    <div class="panel-footer">ABC Store</div>
                </div>
            </div>

        </div>
        
         <div class="copyright-wthree" style="width: 100%; text-align: center;background: lightblue;padding: 10px 0px; 
                            bottom: 0;">
            <p> All Rights Reserved | Design by <a href="#"target="_blank">Lahiru</a></p>

            <a target="_blank" title="find us on Facebook" href="#"><img alt="follow me on facebook" src="//login.create.net/images/icons/user/facebook_30x30.png" border=0></a>
            <a target="_blank" title="follow me on instagram" href="#"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a>
            <a target="_blank" title="follow me on twitter" href="#"><img alt="follow me on twitter" src="//login.create.net/images/icons/user/twitter_30x30.png" border=0></a>	

        </div>

    </body>
</html>






















