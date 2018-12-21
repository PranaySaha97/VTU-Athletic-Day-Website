<form action="F_test_1.php" method="POST">
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
echo "Hello";
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "college";

echo " ".$dbName." ".$dbPassword." ".$dbServername." ".$dbUsername;
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



    echo $query;
    if(mysqli_query($db,$query)){
        //header('Location: form1.php');
        echo "Data Inserted Successfully!!!";
    
    }else{
        echo "Data Insertion Failure!!!";
    }
?>