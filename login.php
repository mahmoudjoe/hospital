
<!DOCTYPE html>
<html>
    <head>
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Login to TABIBK</title> 
        <link rel="stylesheet" href="logincss.CSS">

    </head>
    
    <body class="ali">

                 
                        <br><br>
                        
                        <h class="sp">
                            
                                                    Your health is importnt to us
                            
                        </h>
                        
                        <h class="tab"> 
                            
                            TABIBK
                            
                        </h> 


                        <div >
                            
                                        Please login to your account
                            
                        </div>
  <form action="" method="get">
                        <p > 
                            
                            <input name="us"  type="user" required="" placeholder="   Enter your user name">
                            
                        </p>

                        <p>
                            
                            <input name="pass" type="password" required="" placeholder="   Enter your password" >
                        
                        </p>   


                        

                        <INPUT type="checkbox">         <br>


  
                        <span><INPUT name="submit" type="submit" value="Login">
    </form>


                        <span style="margin-left: 30px;color: #5E767E">
                            
                            Don't have an account ?
                            
                                <a href="http://localhost/Final%20Projcet/signup.php">
                                    
                                    Sign Up
                                
                                </a>
                            
                        </span>
                        </span>
                            

                            <br>
                            <br>
                            <br>
                            <br>

                        <div style="text-align: left;padding-left: 38px;object-position: bottom;">
                                
                                copyright &copy; 2021 all rights reserved to TABIBK &reg; Team
                            
                        </div>

                    
                  
                    <?php
                            if(isset($_GET["submit"])){
                            $servername='localhost';
                            $username='root';
                            $password='';
                            $dbname='tabibk';
                            $conn=new mysqli($servername , $username , $password , $dbname);
                            $x=$_GET['us'];
                            $y=$_GET['pass'];
                            $var=mysqli_query($conn,"SELECT * FROM patient WHERE user_patient='$x' AND password_user='$y'");
                            $varx=mysqli_num_rows($var);
                                if($varx==1)
                                {
                                header("location:consultation.php");
                                }
                                else{
                                header("location:signup.php");

                                }
                            

                            
                            }
                    ?>
       
    </body>
                        
</html>