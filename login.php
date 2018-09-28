<?php
error_reporting(0);
$res=mysqli_connect("localhost","root","root","sports");


//require 'connect.inc.php';


if(isset($_POST['cname']) && isset($_POST['pass']) && isset($_POST['submit'])){
    
        $uname=$_POST['cname'];
        $pass=$_POST['pass'];
        // $pass_hash=md5($pass);
    
       
    
        $query="SELECT `username`,`password` FROM `user_db`";
        //$query_run=mysqli_query($res,$query);
        $cnt=0;
    
        if($query_run=mysqli_query($res,$query)){

             while($query_row=mysqli_fetch_assoc($query_run)){
                $username=$query_row['username'];
                $password=$query_row['password'];
                // $password_hash=md5($password);
    
                
                    if($pass==$password){


                        if($uname==$username){

                            header('Location: intReg.html');

                        }
                        else{
                            echo "<script>alert('Invalid Username');</script>";
                            header('Location: registration.html');

                        }
                        
                        
    
                    }
                    else{
                        $cnt++;
                    }
                
    
    
            }
            if($cnt!=0){
                echo "<script>alert('Invalid Password');</script>";
                header('Location: registration.html');
            }
    
    
        }else{
            echo "<script>alert('Unable to fetch data');</script>";
            header('Location: registration.html');
        }
    }

?>