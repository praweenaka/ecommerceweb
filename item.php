<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="col-md-8" id="signup_msg1">
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Product Add Form</div>
                        <div class="panel-body">
                            <div class="container" style="margin-left: 120px">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="product_title">Product Title</label>
                                                <input type="text" id="product_title" name="product_title"class="form-control">
                                            </div>
                                        </div>
                                        <label for="product_cat">Product Category</label>
                                        <select name="product_cat" id="product_cat" onkeypress="keyset('cat_title', event);" class="form-control">
                                            <?php
                                            include 'db.php';

                                            $sql = "SELECT * FROM categories";
                                            $run_query = mysqli_query($con, $sql);

                                            while ($row = mysqli_fetch_array($run_query)) {
                                                echo "<option value='" . $row["cat_id"] . "'>" . $row["cat_title"] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="product_brand">Product Brand</label>
                                        <select name="product_brand" id="product_brand" onkeypress="keyset('brand_title', event);" class="form-control">
                                            <?php
                                            include 'db.php';

                                            $sql = "SELECT * FROM brands";
                                            $run_query = mysqli_query($con, $sql);

                                            while ($row = mysqli_fetch_array($run_query)) {
                                                echo "<option value='" . $row["brand_id"] . "'>" . $row["brand_title"] . "</option>";
                                            }
                                            ?>
                                        </select> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="product_price">Product Price</label>
                                        <input type="number" id="product_price" name="product_price"class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="product_image">Product Image</label>
                                        <input type="file" id="file" name="file"  class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <input style="float:right;" value="ADD" type="button" id="save_item" onclick="save_item()" class="btn btn-success btn-lg">
                                    </div>
                                </div>
                            </div>
                           
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

<script src="main.js" type="text/javascript"></script>

















