

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>


</head>
<body>
<div class="container_12">
    <div class="grid_12 header-repeat">
        <div id="branding">

            <div class="floatleft middle">
                <a href="../index.php"><h1>Photo World </h1></a>
            </div>
            <div class="floatright">

                <div class="floatleft marginleft10">
                    <ul class="inline-ul floatleft">
                        <li>Hello Admin</li>
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="grid_12">
        <ul class="nav main">
            <li class="ic-dashboard"><a href="index.php"><span>Dashboard</span></a> </li>
            <li class="ic-typography"><a href="viewallusers.php"><span>View All Users</span></a></li>
            <li class="ic-grid-tables"><a href="inbox.php"><span>Inbox</span></a></li>
            <li class="ic-charts"><a href="../index.php"><span>Visit Website</span></a></li>
        </ul>
    </div>
    <div class="clear">
    </div>
    <div class="grid_2">
        <div class="box sidemenu">
            <div class="block" id="section-menu">
                <ul class="section menu">



                    <li><a class="menuitem">Category Option</a>
                        <ul class="submenu">
                            <li><a href="addcat.php">Add Photos</a> </li>
                            <li><a href="addfare.php">Photo Cost</a> </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <div class="grid_4" style="background-color: white">
        
        <form action="" method="_GET">
 
             Id:<br>
             <input type="text" name="pid" value=""><br><br>
           
             Photo Name:<br>
            <input type="text" name="pname" value=""><br><br>
          
             Photo Cost:<br>
             <input type="text" name="pcost" value=""><br><br>
     

             <input type="submit" name="submit" value="UPDATE">
             <input type="submit" name="del" value="delete"><br><br>


        </form>

<?php    
        require_once ("db.php");
        error_reporting(0);
        if($_GET['submit'])
        {
            
            $rollno = $_GET['pid'];
            $name = $_GET['pname'];
            $class = $_GET['pcost'];
            $query = "UPDATE photocost SET pname='$name' , cost='$class'  WHERE id='$rollno'";
            $data = mysqli_query($con, $query);
           
            if($data)
            {
                echo "Update complite";
            }
            else
            {
                echo " No record Updated";
            }        
        }
?>   

<?php
            if($_GET['del']){
            require_once ("db.php");
            error_reporting(0);
            $rollno = $_GET['pid'];
            $query = "DELETE FROM PHOTOCOST WHERE id='$rollno'";
            $data = mysqli_query($con, $query);

}

?>

    </div>

   <div class="grid_3" style="margin-left: 5%; ">

    <?php
    require_once ("db.php");

    $sqlShow="SELECT * FROM `PHOTOCOST` ORDER BY id ASC";
    $qryShow= mysqli_query($con,$sqlShow);
    $numShow =mysqli_num_rows($qryShow);
    if($numShow>0)
    {
        ?>
        <table border = "1">
            <tr>

                <th>-Id- </th>
                <th> -Name- </th>
                <th> -Cost-</th>
            </tr>
            <?php while($recShow = mysqli_fetch_object($qryShow)){?>
                <tr style ="background: aqua;">
                    <td><?php echo $recShow->id; ?></td>
                    <td><?php echo $recShow->pname; ?></td>
                    <td><?php echo $recShow->cost ; ?></td>
                </tr>
            <?php }?>

        </table>
        <?php
    }
    else{
        echo "no Data Found" ;
    }
    ?>


    </div>
    <div class="grid_1" style="">

    </div>




</div>
</div>
<div id="site_info">
    <p>
        &copy; Copyright <a href="#"> Photo World</a>. All Rights Reserved.
    </p>
</div>
</body>
</html>

