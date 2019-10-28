
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photo World</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">



    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



</head>

<body>

<nav style="background:#1b3b48" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div >
            <a class="navbar-brand" style="color:white;margin-right:100px;margin-bottom: 10px;font:italic bold 22px Georgia, serif;" href="index.php"><b >Photo World</b></a>

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="index.php">Home</a>
                </li>
                
                <li>
                    <a href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="fare.php"> Photo Cost</a>
                </li>

                <li>
                    <a href="contact/contact.html">Contact</a>
                </li>


            </ul>

        </div>
    </div>

</nav>


<div class="container">

    <div class="row">

        <div class="col-md-8">



    </div>
</div>



<?php

$db = mysqli_connect("localhost", "root", "", "amarproshno");


$msg = "";

$result = mysqli_query($db, "SELECT * FROM images");
?>
    <style type="text/css">
        #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }
        form{
            width: 50%;
            margin: 20px auto;
        }
        form div{
            margin-top: 5px;
        }
        #img_div{
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }
    </style>
</head>
<body>
<div  id='img_div'>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
        echo "<img src='admin/images/".$row['image']."' >";
        echo "<h3>".$row['title']."</h3>";
        echo "<p>".$row['image_text']."</p>";

        echo "</div>";
    }
    ?>


</div>

<footer class="footer">

</div>
</div>




    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row footer-top-inner">
                    <div class="col-sm-3">
                        <div class="footer-text">
                            <h4>About us</h4>
                            <p>
                                Photography gives you the opportunity to use your sensibility and everything you are to say something about and be part of the world around you. In this way, you might discover who you are, and with a little luck, you might discover something much larger than yourself.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-address">
                            <h4>Our Address</h4>
                            <ul>
                                <li>
                                    <a  class="house-ico" href="#">
                                        Mirpur 2,1216,Dhaka, Bangladesh
                                    </a>
                                </li>
                                <li>
                                    <a class="phone-ico" href="#">
                                        0123 4567890
                                    </a>
                                </li>
                                <li>
                                    <a class="msge-ico" href="#">
                                        sham.saha.09@gmail.com
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="col-xs-12">
                    <h5>Copyright © 2019 <a target="_new" href="">Shyam Saha</a></h5>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl.carousel.1/owl.carousel.min.js"></script>
    <script src="nivo.slider/nivo.slider.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkged.min.js"></script>

    <script src="js/main.js"></script>



    </footer>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>

