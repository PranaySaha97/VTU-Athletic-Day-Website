
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   <link rel="shortcut icon" href="G:\Website\Project\assets\img\logo.png" type="image/gif/png" />
    <title>SJC Institute Of Technology</title>
     
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

<!---Drop down list-->
<link href="G:\Website\Project\assets\css\dropdown.css" rel="stylesheet" />
<link href="G:\Website\Project\assets\css\dropdown-submenu.css" rel="stylesheet" />

</head>



<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="http://www.sjcit.ac.in/images/logo.jpg" alt="" height="100" width="100" />
               
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.html">HOME</a></li>
                    <li ><a href="registration.php">REGISTRATION</a></li>
                    <li><a href="guidelines.html" style="">GUIDELINES</a></li>
                     <li><a href="events.html">EVENTS</a></li>
                     <li><a href="organizers.html">ORGANIZERS</a></li>
                     <li><a href="index.html#contact-sec">CONTACT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
      
      
      
    <!-- NAVBAR SECTION END-->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                   
                   <table border="0" cellspacing="50" width="100%">
                       <tr>
                           <td rowspan="4"><img src="assets\img\swamiji1.png" height="225" width="205"></td> 
                      

                       
                            <td><h4>||Jai Sri Gurudev||<br></h4></td>
                            <td rowspan="4"><img src="assets\img\swamiji2.png" height="225" width="205"></td> 
                       </tr>
                       <tr>

                            <td><h4> Sri Adichunchunagiri Shikshana Trust <sup><font size="5">&#174</font></sup><br></h4></td>
                       </tr>
                       <tr>
                       <td><h1>
                        S.J.C. Institute Of Technology
                        </h1></td>
                       </tr>
                       
                   </table>
                        
                    
                    
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div id="home-sec" class="container set-pad">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> S.J.C Institute of Technology welcome all participants <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1><strong>Form 1</strong></h1><br>  
                    <center>
                            <marquee style="font-size: 18px; color: red;"> Please Bring Eligibility Performa Attached.</marquee>
                            <form action="form1.php" method="POST">
<table>
    <tr>
        <td>Name of College</td>
        <td><div class="form-group"><input type="text" name="col_name" /></div></td>
    </tr>
    <tr>
            <td>Email ID</td>
            <td><div class="form-group"><input type="email" name="mail_id" /></div></td>
   </tr>
   <tr>
        <td>Name of Principal</td>
        <td><div class="form-group"><input type="text" name="princi_name" /></div></td>
    </tr>
    <tr>
            <td>Contact Number</td>
            <td><div class="form-group"><input type="tel" name="contact_num" /></div></td>
    </tr>
    <tr>
            <td>Physical Education Director Name</td>
            <td><div class="form-group"><input type="text" name="ped_name" /></div></td>
    </tr>
    <tr>
            <td>Number of Men Athlete</td>
            <td><div class="form-group"><input type="number" name="men_ath_cnt" /></div></td>
    </tr>
    <tr>
            <td>Number of Women Athlete</td>
            <td><div class="form-group"><input type="number" name="women_ath_cnt" /></div></td>
    </tr>
    <tr>
            <td>Expected date of Arrival</td>
            <td><div class="form-group"><input type="date" name="arr_date" /></div></td>
    </tr>
    <tr>
            <td>Accomodation Required</td>
            <td><div class="form-group"><input type="radio" name="acc_req" value="yes" checked> Yes
                <input type="radio" name="acc_req" value="no"> No</div>
                </td>
    </tr>
    <tr>
        <td colspan="2"><center><div class="form-group"><input type="submit" value="Submit" name="sbmt_btn" /></div></center></td>
    </tr>
                


</table>    

</form>




<?php

error_reporting(0);

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "college";

//echo " ".$dbName." ".$dbPassword." ".$dbServername." ".$dbUsername;
$db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Not Connected Successfully!!!");
//$query="INSERT INTO form1 VALUES ('sad','asd@gmail.cm','sadsss','123456798','sdwwq','4','6','12-28-1997','Yes')";

$col_name=$_POST['col_name'];
$mail_id=$_POST['mail_id'];
$princi_name=$_POST['princi_name'];
$contact_num=$_POST['contact_num'];
$ped_name=$_POST['ped_name'];
$men_ath_cnt=$_POST['men_ath_cnt'];
$women_ath_cnt=$_POST['women_ath_cnt'];
$arr_date=$_POST['arr_date'];
$acc_req=$_POST['acc_req'];

$query= "INSERT INTO form1 VALUES ('".mysqli_real_escape_string($db,$col_name)."','".mysqli_real_escape_string($db,$mail_id)."','".mysqli_real_escape_string($db,$princi_name)."','".mysqli_real_escape_string($db,$contact_num)."','".mysqli_real_escape_string($db,$ped_name)."','".mysqli_real_escape_string($db,$men_ath_cnt)."','".mysqli_real_escape_string($db,$women_ath_cnt)."','".mysqli_real_escape_string($db,$arr_date)."','".mysqli_real_escape_string($db,$acc_req)."')";



    //echo $query;
    if(mysqli_query($db,$query)){
        //header('Location: form1.php');
        echo "Data Inserted Successfully!!!";
    
    }else{
        echo "Data Insertion Failure!!!";
    }
?>
                
                        </center>
                    <strong style="font-size: 25px; "><a href="form2.php" style="text-decoration: none;">Click Here</a> to fill form 2.</strong><br>
                </div>
            </div>
        </div>
     <!-- CONTACT SECTION END-->
    <div id="footer">
        Contact for queries: 9164399611<br>
        Copyright &copy; <a href="https://www.linkedin.com/in/pranay-saha-42820011a/" style="text-decoration: none;">Pranay Saha</a> | <a href="https://www.linkedin.com/in/7sunny-singh/" style="text-decoration: none;">Sunny Singh</a>
        <br>Department of HRD
    </div>
     <!-- FOOTER SECTION END-->


     <!--Drop down list code-->



     <!--Drop down list code end-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>

</body>
</html>

