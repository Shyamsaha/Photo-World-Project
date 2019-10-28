<div style="margin: 0% 0% 00% 30%; ">
    

<?php
                        include("connection.php");
                        $query = "SELECT * FROM photocost";
                        $data = mysqli_query($conn, $query);
                        $total = mysqli_num_rows($data);
                        if($total != 0)
                        {
                            ?>
                            <table style="width: 70%;height: 50%">
                                <tr>
                                    <th>ID</th>
                                     <th>PhotoName</th>
                                    <th>Cost</th>     
                                </tr>
                        <?php
                        while($result = mysqli_fetch_assoc($data))
                        {

                            echo "<tr>
                                    <td>".$result['id']."</td>
                                    <td>".$result['pname']."</td>
                                    <td>".$result['cost']."</td>  
                                 </tr>"; 
                        }
                                
                        }
                                
                        ?> 
                    </table>


</div>


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
    <style>

    </style>



</head>

<body >

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
                    <a href="#"> Photo Cost</a>
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

</div>


<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row footer-top-inner">
                <div class="col-sm-3">
                    <div class="footer-text">
                        <h4>About us</h4>
                        <p>
                            Photography gives you the opportunity to use your sensibility and everything you are to say something about and be part of the world around you. In this way, you might discover who you are, and with a little luck, you might discover something much larger than yourself.</p>
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
