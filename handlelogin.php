<html><body bgcolor="white">
 <center>
 <?php
     
     $dbserver='localhost';
     $dbusername='root';
     $dbpassword= 'root';
     $dbname='social_media';
     $port=3308;
    
     
     $dbconn= mysqli_connect("$dbserver:$port",$dbusername,$dbpassword);
     
     $sql="use social_media;";
     if(mysqli_query($dbconn,$sql))
    {
        echo"no problem in database";
    }
     else
         echo "issue ih db handling";
	 
	 
    
	 $email = $_POST('email');
	 echo"hiiiiiii";
     $pwd = $_POST('pwd');
     $sql="select * from tblsocialconnect where email='$email' and password='$pwd'";
	 
	 $db= null;
	 $db= mysql_select_db($dbname,$dbconn);
	 $resultval= mysql_query($sql,$dbconn);
	 
	 if(mysql_num_rows($resultval)<=0){
		 ?>
		 <br/><p style="color:black">invalid username or password</p><br/>
		 <a href="good1.php">click to go back</a>
	 <?php
	 }
	 else 
		 echo "<h1>authenticated successfully.</h1>";
    mysqli_close($dbconn);
    ?>     
</center>   
</body>
</html>