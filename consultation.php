<!Doctype.html>
<html>
    <head>
      
        <title>Consultation</title> 
        
        <link rel="stylesheet" href="conscss.CSS">

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
                
                How do you feel ?
                
            </div>
    
            <form action="" method="get">

            <p><input name="head" type="text"required placeholder="   Your head"> </p>
            
            <p><input name="belly" type="text"required placeholder="   Your belly"> </p>
            
            <p><input name="teeth" type="text"required placeholder="   Your teeth"> </p>
            
            <P><input name="chest" type="text"required placeholder="   Your chest"></P>
            
            <P><input name="urologist" type="text"required placeholder="   Your urologist"></P>
            
            <P><input name="feet" type="text"required placeholder="   Your feet"></P>
            
            <input name="send" type="submit" value="Submit" style="width: 120px;height: 40px;margin-left: 50px;margin-top: 10px;margin-bottom: 10px;border: 1px solid #00baff;border-radius: 10px;font-size: 20px">

</form>
            <div style="text-align: left;padding-left: 38px;object-position: bottom;">copyright &copy; 2021 all rights reserved to TABIBK &reg; Team</div>
            <?php
                    if(isset($_GET["send"])){
                    $hostname='localhost';
                    $username='root';
                    $password='';

                    try {
                    $dbh = new PDO("mysql:host=$hostname;dbname=tabibk",$username,$password);

                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                  

                    $sql="INSERT INTO consultation (head,belly,teeth,chest,urologist,feet)
                    VALUES('".$_GET['head']."','".$_GET['belly']."','".$_GET['teeth']."','".$_GET['chest']."','".$_GET['urologist']."','".$_GET['feet']."')";
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
