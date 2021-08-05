<?php 

$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";

if(isset($_POST["Submit"])) {

    if(empty($_POST["Name"])) {
        $NameError = "Name is Required.";
    } else {
        $Name = Test_User_Input($_POST["Name"]);

        if(!preg_match("/^[A-Za-z. ]*$/", $Name)) {
            $NameError = "Only Letters and Space are allowed.";
        }
    }

    if(empty($_POST["Email"])) {
        $EmailError = "Email is Required.";
    } else {
        $Email = Test_User_Input($_POST["Email"]);

        if(!preg_match("/[A-Za-z0-9._-]{3,}@[A-Za-z0-9._-]{3,}[.]{1}[A-Za-z0-9._-]{2,}/", $Email)) {
            $EmailError = "Please enter valid email address.";
        }
    }

    if(empty($_POST["Gender"])) {
        $GenderError = "Gender is Required.";
    } else {
        $Gender = Test_User_Input($_POST["Gender"]);
    }

    if(empty($_POST["Website"])) {
        $WebsiteError = "Website URL is Required.";
    } else {
        $Website = Test_User_Input($_POST["Website"]);

        if(!preg_match("/(https:[\/\/]|ftp:[\/\/]|http:[\/\/]|www)+[A-Za-z0-9.-_\/\$\%\#?\~\&`!]+\.[A-Za-z0-9.-_\/\$\%\#?\~\&`!]*/", $Website)) {
            $WebsiteError = "Please enter valid website URL.";
        }
    }
}
?>


    <?php
        if(!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Gender"]) && !empty($_POST["Website"])) {
            if(preg_match("/^[A-Za-z. ]*$/", $Name) && preg_match("/[A-Za-z0-9._-]{3,}@[A-Za-z0-9._-]{3,}[.]{1}[A-Za-z0-9._-]{2,}/", $Email) && preg_match("/(https:[\/\/]|ftp:[\/\/]|http:[\/\/]|www)+[A-Za-z0-9.-_\/\$\%\#?\~\&`!]+\.[A-Za-z0-9.-_\/\$\%\#?\~\&`!]*/", $Website)) {
                echo '<div class=info>';
                echo "<h2>Your Submit Information</h2>";
                echo "<strong>Name:</strong> ".ucwords($_POST["Name"]). "<br />";
                echo "<strong>Email</strong>: {$_POST["Email"]} <br />";
                echo "<strong>Gender</strong>: {$_POST["Gender"]} <br />";
                echo "<strong>Website</strong>: {$_POST["Website"]} <br />";
                
                if(empty($_POST["Comment"])) {
                    echo "<strong>Comment</strong>: No Comment. <br />";
                } else {
                    echo "<strong>Comment</strong>: {$_POST["Comment"]} <br />";
                }
                echo '</div>';
            } else {
                echo '<div class=info>';
                echo "<h4>Please complete and correct your form again.</h4>";
                echo '</div>';
            }
        }
    
    ?>


<?php

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
    <link rel="stylesheet" href="formvalidationcss.scss">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">

    <title>Form</title>
</head>
<body>

    <h2>Form Validation with PHP.</h2>

    <form  action="formvalidation.php" method="POST"> 
    <legend>* Please Fill Out the following Fields.</legend>	
    
            <fieldset>
                <strong>Name:</strong><br>
                <input class="input" type="text" Name="Name" value="" placeholder="Your name..">
                <span>* <?php echo $NameError?></span><br><br>	 

                <strong>E-mail:</strong><br>
                <input class="input" type="email" Name="Email" value="" placeholder="Your email...">
                <span>* <?php echo $EmailError?></span><br><br>

                <strong>Gender:</strong><br>
                <input class="radio" type="radio" Name="Gender" value="Female">Female
                <input class="radio" type="radio" Name="Gender" value="Male">Male
                <span>* <?php echo $GenderError?></span><br><br>

                <strong>Website:</strong><br>
                <input class="input" type="text" Name="Website" value="" placeholder="Website URL..">
                <span>* <?php echo $WebsiteError?></span><br><br>

                <strong>Comment:</strong><br>
                <textarea Name="Comment" rows="5" cols="25" placeholder="Message.."></textarea>
                <br>
                <br>
                <input class="button" type="Submit" Name="Submit" value="Submit Your Information">        
            </fieldset>
        
       
    
        
    </form>

</body>
</html>