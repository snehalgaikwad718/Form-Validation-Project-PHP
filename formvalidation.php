<?php 

$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";

if(isset($_POST["Submit"])) {

    if(empty($_POST["Name"])) {
        $NameError = "Name is Required";
    } else {
        $Name = Test_User_Input($_POST["Name"]);
    }

    if(empty($_POST["Email"])) {
        $EmailError = "Email is Required";
    } else {
        $Email = Test_User_Input($_POST["Email"]);
    }

    if(empty($_POST["Gender"])) {
        $GenderError = "Gender is Required";
    } else {
        $Gender = Test_User_Input($_POST["Gender"]);
    }

    if(empty($_POST["Website"])) {
        $WebsiteError = "Website URL is Required";
    } else {
        $Website = Test_User_Input($_POST["Website"]);
    }

}

function Test_User_Input($Data) {
    return $Data;
}

?>


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

    <form  action="formvalidation.php" method="POST"> 
    <legend>* Please Fill Out the following Fields.</legend>			
    <fieldset>
    Name:<br>
    <input class="input" type="text" Name="Name" value="">
    * <?php echo $NameError?><br><br>	 
    E-mail:<br>
    <input class="input" type="text" Name="Email" value="">
    * <?php echo $EmailError?><br><br>
    Gender:<br>
    <input class="radio" type="radio" Name="Gender" value="Female">Female
    <input class="radio" type="radio" Name="Gender" value="Male">Male
    * <?php echo $GenderError?><br><br>		   
    Website:<br>
    <input class="input" type="text" Name="Website" value="">
    * <?php echo $WebsiteError?><br><br>
    Comment:<br>
    <textarea Name="Comment" rows="5" cols="25"></textarea>
    <br>
    <br>
    <input type="Submit" Name="Submit" value="Submit Your Information">
    </fieldset>
    </form>

</body>
</html>