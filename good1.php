<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        
<title>Nitika</title>    
    <link rel="icon" type="image" href="favicon.ico">

    
    
</head>
  <body>
      <div id="header">
          <div class="fl" id="headertitle" style="font-size: 48px">
         CHILL OUT    
          </div>
            <div class="fr" id="headerlogin">
              <form name="frmlgin" method="post" action="handlelogin.php">
                 <div class="fr" style="padding-right:20px;">
                 <br>
                  <input type="submit" name="btnLogin" value="Login"/>  
                  </div>
                 <div class="fr" style="padding-right:20px;"> Password<br>
                 <input type="password" name="pwd" placeholder="password"/><br>
                 <a href="forgetpwdpage.php" style="color:#FFFFFF; text-decoration:none;" >Forget your password</a>
                 </div>
                  <div class="fr" style="padding-right: 20px;">Email<br>
                  <input type="text" name="email" placeholder="email id"/><br>
                  <input type="checkbox" name="chkkeeplogin"> Keep me logged in
                     </div>
              </form>
          </div>
      </div>
      
      <div id="midcontent">
          <div class="fl" style="width: 550px;padding-left: 150px;border: 0px solid;padding-top: 50px;">
           Connect with friends and the<br>
           world around you<br><br>
           <img align="middle" src="Photos-icon.png" style="width: 120px;height: 120px;">See photos and updates from friends.<br><br>
           <img align="middle" src="share-icon-011.jpg" style="width: 100px;height: 100px;">Share what's new in your life.<br><br>
           <img align="middle" src="768px-More_Icon_C.svg.png" style="width: 100px;height: 100px;">Find more of what you are looking for.
          </div>
        
          <div class="fl" style="border: 0px solid;margin-left: 200px;">
          <table style="float: left" border="0">
           <form name="frmregs" method="post" action="handleRegistration.php">
           <tr><td colspan="2" style="font-size: 48px">Sign Up</td></tr>
            <tr><td colspan="2" ></td></tr>
           <tr><td width="150"><input class="biginput" type="text" placeholder="First name" name="firstname" style="width: 150px;"></td><td ><input class="biginput" type="text" placeholder="Last name" name="lastname" style="width: 150px;"></td></tr>

            <tr><td colspan="2"><input class="biginput" name="emailReg" type="text" placeholder="Email" style="width: 304px;"></td></tr>
            <tr><td colspan="2"><input class="biginput" name="mobileno" type="text" placeholder="Mobile no" style="width: 304px;"></td></tr>
            <tr><td colspan="2"><input class="biginput" name="password" type="password" placeholder="New Password" style="width: 304px;"></td></tr>
            <tr><td colspan="2" style="font-size:16px">Birthday </td></tr>
               <tr><td colspan="2"><select class="biginput" name="month">
            <option>Month</option>
            <option value="01">Jan</option>   
            <option value="02">Feb</option>   
            <option value="03">Mar</option>   
            <option value="04">Apr</option>   
            <option value="05">May</option>   
            <option value="06">Jun</option>   
            <option value="07">Jul</option>   
            <option value="08">Aug</option>   
            <option value="09">Sep</option>   
            <option value="10">Oct</option>   
            <option value="11">Nov</option>   
            <option value="12">Dec</option>   
             </select> 
                   
                   
          <select class="biginput" name="day">
            <option>Day</option>
            <?php for($i=1;$i<=31;$i++)
                 echo "<option value=$i>$i</option>";
            ?>                                  
         </select> 
        
         <select class="biginput" name="year">
            <option>Year</option>
            <?php for($i=date("Y");$i>=date("Y")-90;$i--)
                 echo "<option value=$i>$i</option>";
            ?>                                  
                   </select></td></tr>
        <tr><td colspan="2"><input type="radio" name="rdogen" value="F">female<input type="radio" name="rdogen" value="M">male</td></tr>
              <tr><td colspan="2" width="350">By clicking Sign Up, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</td></tr>    
        <tr><td colspan="2"><input class="biginput" name="btnSignup" type="submit" value="Sign Up" style="background-color: #00CC66;width: 150px;"></td></tr>
              </form>
              </table>
                    
          </div>
          <div style="clear: both;"></div>
      
      </div>
      
      
</body>f
</html>