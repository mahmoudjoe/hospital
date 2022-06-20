<!Doctype.html>
<html>
    <head>
        <title>Sign UP to TABIBK</title> 

        <meta.name ="yahya". content="player"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="Signcss.CSS">

    </head>
    <body class="ali">
        
              <br><br>
            <h class="sp">
                                Your health is importnt to us
            </h>
            <h class="tab">
                TABIBK
            </h> 


            <div>
                Please sign up
            </div>

            <form action="" method="get">
            <p><input name="first_name" type="text"required placeholder="   First name"> </p>
                       
            <P><input name="last_name" type="text"required placeholder="   Last name"></P>
            
            <P><input name="username" type="text"required placeholder="   User name"></P>
            
            <P><input name="pass" type="password"required placeholder="   Password"></P>
            
            <p><input name="numberphone" type="text"required placeholder="   Phone number"> </p>

            <input name="submit" type="submit" value="Sign Up" style="width: 120px;height: 40px;margin-left: 50px;margin-top: 5px;border: 1px solid #00baff;border-radius: 10px;font-size: 20px">
            </form>
            <div style="text-align: left;padding-left: 38px;object-position: bottom;">copyright &copy; 2021 all rights reserved to TABIBK &reg; Team</div>

            
        </form>
        <?php
                    if(isset($_GET["submit"])){
                    $hostname='localhost';
                    $username='root';
                    $password='';

                    try {
                    $dbh = new PDO("mysql:host=$hostname;dbname=tabibk",$username,$password);

                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                  

                    $sql="INSERT INTO patient (fname,lname,user_patient,password_user,numberphone)
                    VALUES('".$_GET['first_name']."','".$_GET['last_name']."','".$_GET['username']."','".$_GET['pass']."','".$_GET['numberphone']."')";
                   if($dbh->query($sql))
                   $dbh = null;
                    }
                    catch(PDOException $e)
                    {
                    echo $e->getMessage();
                    }
                    header("location:login.php");

                    }

                    ?>
    </body>
 </html>
