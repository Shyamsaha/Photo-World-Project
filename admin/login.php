<?php
 ob_start();
?>

<?php
require_once ("db.php");
?>
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
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
	 <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
    <style>
* { box-sizing: border-box; padding:0; margin: 0; }

body {
    font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  color:white;
  font-size:12px;
  background:#333 ;
}

form {
    background:#111; 
  width:300px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

form:after {
  content:"";
  display:block;
  position:absolute;
  height:1px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
    content:"";
  display:block;
  position:absolute;
  width:8px;
  height:5px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}

.inset {
    padding:20px; 
  border-top:1px solid #19191a;
}

form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

form h1:after {
    content:"";
  display:block;
  width:250px;
  height:100px;
  position:absolute;
  top:0;
  left:50px;
  pointer-events:none;
  transform:rotate(70deg);
  -webkit-transform: rotate(70deg);
  background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
   background-image: -webkit-linear-gradient(50deg, rgba(255,255,255,0.05), rgba(0,0,0,0)); /* For Safari */

}

label {
    color:#666;
  display:block;
  padding-bottom:9px;
}

input[type=text],
input[type=password] {
    width:100%;
  padding:8px 5px;
  background:linear-gradient(#1f2124, #27292c);
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
}

label[for=remember]{
    color:white;
  display:inline-block;
  padding-bottom:0;
  padding-top:5px;
}

input[type=checkbox] {
    display:inline-block;
  vertical-align:top;
}

.p-container {
    padding:0 20px 20px 20px; 
}

.p-container:after {
    clear:both;
  display:table;
  content:"";
}

.p-container span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:8px;
}

input[type=submit] {
    padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  background:#0184ff;
  color:white;
  float:right;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}

input[type=submit]:hover {
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -10px 10px rgba(255,255,255,0.1);
}

input[type=text]:hover,
input[type=password]:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password] {
    background:#27292c;
}

</style>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">

				<div class="floatleft middle">
                    <a href="../index.php"><h1>Photo World</h1></a>
				</div>
                <div class="floatright">

                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="regs.php">Registration</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
       
        <div class="clear">
        </div>
        <div class="grid_2">
             
        <div style="margin: 0% 0%  0% 250%;">
          



    <form action="",method="get">
              <h1>Admin Login Form</h1>
              <div>
                <p>
                <label for="email">User Name:</label>
                <input type="text" name="aname" id="email">
              </p>
              <p>
                <label for="password">PASSWORD:</label>
                <input type="password" name="password" id="password">
              </p>
              
              </div>
              <p class="p-container">
                <input type="submit"  name="sbmit"  value="Submit">
              </p>
    </form>
           
           
           
    <?php 

              error_reporting(0);
                 
              $na = $_GET['aname'];
              $pa = $_GET['password'];

              $query = "SELECT * FROM ADMIN WHERE username = '$na' and password = '$pa'";
              $data  =mysqli_query($con, $query);
              $row= mysqli_num_rows($data);
              if($row==1)
              {
                echo "login ok";
                header('location:index.php');
                 ob_end_flush();
              }
        
    
    ?> 

        </div>

        </div>





        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
         &copy; Copyright <a href="#">Photo World</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
