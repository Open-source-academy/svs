<!Doctype html>
<html>
    <head>
        <style type="text/css">

            body {font-family:Times new roman, Sans-Serif;}
            #container {width:300px; margin:0 auto;}
       
            form label {display:inline-block; width:240px;}
        
            form input[type="text"],
            form input[type="password"],
            form input[type="email"] {width:260px;}

            form .line {clear:both;}
            form .line.submit {text-align:right;}

        </style>
    </head>
    <body bgcolor="fushsia">
        <div id="container">
            <form name="voter_reg" action="voter_reg.php" method="POST">
                <h1><u>REGISTRATION</u></h1>
                <div class="line"><label for="aadharid">Aadhar ID *: </label><input type="text" placeholder="Enter Aadhar id" name ="aid" pattern=".{16,16}" required /></div>

                <div class="line"><label for="name" >Name*: </label><input type="text" placeholder="Enter your name" name="name" required /></div>
                <div class="line"><label for="Gender" >Gender*: </label><div>
                <div class="line"><input type="radio" name="gender" value="male" />Male
                <input type="radio" name="gender" value="female" />Female
                <input type="radio" name="gender" value="other" />Others
                </div>

                <div class="line"><label for="fathernames">Father name *: </label><input type="text" placeholder="Enter father's name" name="fname" required  /></div>
                                <div class="line"><label for="mob">Mobilenumber*: </label><input type="number" placeholder="Enter mobile number" name="mob" pattern=".{10,10}" required/></div>

                <div class="line"><label for="dob">Date of birth *: </label><input type="date" placeholder="eg.20/12/1984" name="dob" required /></div>
                
                <div class="line"><label for="address">Address: </label><textarea cols="25" name="adrs"></textarea></div>
   <div class="line"><label for="city">City /Town*: </label><input type="text" placeholder="Enter your city /town/village name" name="city" required /></div>

   <div class="line"><label for="ward">Ward *: </label><input type="text" placeholder="Enter your ward no" name ="ward" required /></div>

   <div class="line"><label for="cont">constituancy *: </label><input type="text" placeholder="Enter your constituancy" name="const" required /></div>

                <div class="line"><label for="pincode">Pincode *: </label><input type="text" placeholder="Enter your pincode" name="pincode" required /></div>

                <div class="line"><label for="email">Email *: </label><input type="email" placeholder="Enter your mail id" name="email" required /></div>

                
                 <div class="line"><label for="username">User name *: </label><input type="text" placeholder="Enter user name"  name="uname" required /></div>

                <div class="line"><label for="pwd">Password *: </label><input type="password" placeholder="Enter password" name="pass" required /></div><br>

<div class="line submit"><input type="submit" value="Register" name="submit"/></div>

                <p><input type="checkbox">Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
            </form>
        </div>
    </body>
</html>
