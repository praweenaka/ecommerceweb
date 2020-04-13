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
                    <a href="index.php" class="navbar-brand"><marquee >ABC Store</marquee></a>
                </div>

            </div>
        </div>
        <p><br/></p>
        <p><br/></p>
        <p><br/></p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="signup_msg">
                    <!--Alert from signup form-->
                </div>
                <div class="col-md-8" id="signup_msg1">
                    <!--Alert from signup form-->
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Customer SignUp Form</div>
                        <div class="panel-body">

                            <form method="post" action="register.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="f_name">First Name</label>
                                        <input type="text" id="f_name" name="f_name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="f_name">Last Name</label>
                                        <input type="text" id="l_name" name="l_name"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name="email"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="password">password</label>
                                        <input type="password" id="password" name="password"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="repassword">Re-enter Password</label>
                                        <input type="password" id="repassword" name="repassword"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" id="mobile" name="mobile"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="address1">Address Line 1</label>
                                        <input type="text" id="address1" name="address1"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="address2">Address Line 2</label>
                                        <input type="text" id="address2" name="address2"class="form-control">
                                    </div>
                                </div>
                                <p><br/></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button"class="btn btn-success btn-lg">
                                    </div>
                                </div>
                        </div>
                        </form>
                        <div class="panel-footer">ABC Store</div>
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



















