<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <h2>Form Validation with PHP.</h2>

    <form  action="FormValidationProject.php" method="post"> 
    <legend>* Please Fill Out the following Fields.</legend>			
    <fieldset>
    Name:<br>
    <input class="input" type="text" Name="Name" value="">
    *<br><br>	 
    E-mail:<br>
    <input class="input" type="text" Name="Email" value="">
    *<br><br>
    Gender:<br>
    <input class="radio" type="radio" Name="Gender" value="Female">Female
    <input class="radio" type="radio" Name="Gender" value="Male">Male
    *<br><br>		   
    Website:<br>
    <input class="input" type="text" Name="Website" value="">
    *<br><br>
    Comment:<br>
    <textarea Name="Comment" rows="5" cols="25"></textarea>
    <br>
    <br>
    <input type="Submit" Name="Submit" value="Submit Your Information">
    </fieldset>
    </form>

</body>
</html>