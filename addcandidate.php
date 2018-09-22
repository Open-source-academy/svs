<!doctype html>
<html>
    <head>
        <style type="text/css">

            body {font-family:Times new roman, Sans-Serif;}

            #container {width:300px; margin:0 auto;}

           
            form label {display:inline-block; width:180px;}

         
            form input[type="text"] {width:160px;}

            form .line {clear:both;}
            form .line.submit {text-align:right;}

        </style>
    </head>
    <body bgcolor="green">
        <div id="container">
            <form action="reg_candidate.php" name="cadidate" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h1><u>ADD CANDIDATE</u></h1>
<h2>
               <div class="line"><label for="name">Name*: </label><input type="text" name="cname" placeholder="Enter Candidate name"/></div>
                <div class="line"><label for="pic">Photo *: </label><input type="file" name="cphoto" placeholder="Upload Photo" accept="image/*" /></div>
                
                

                <div class="line"><label for="partynames">Party name *: </label><input type="text" name ="pname"placeholder="Enter Party name"/></div>
                <div class="line"><label for="constituancy">constituancy *: </label><input type="text" name="cty" placeholder="Enter Constituancy"/></div>

                <div class="line"><label for="symbol">Symbol*: </label><input type="file" name="sym" placeholder="Upload party symbol" accept="image/*" /></div>

                <div class="line"><label for="age">Age*: </label><input type="number" name= "age" placeholder="Enter candidate's age" /></div>
                
                <div class="line"><label for="address">Address: </label><input type="text" name="add" placeholder="Enter address" /></div>

                <div class="line"><label for="contributions">Contributions *: </label><input type="text" name= "contrib" placeholder="Enter contributions" /></div><br>

                

<div class="line submit"><input type="submit" value="ADD" name="submit" /></div>

             </h2>   
            </form>
        </div>
    </body>
</html>