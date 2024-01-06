
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Students Log In</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>



<body>
    Please enter the login information for CSCI218

<?php

if (isset($_POST['name']) && isset($_POST['pwd']))
{
    
   if ($_POST['name'] == "csci218" && $_POST['pwd'] == "grace2023F")
    {
        
        header("Location: csci218.php");
        exit();
    }
    else
    {
        $error = "Wrong username and password combination";
    }
}
else 
{
    $error = "";
    
}

?>


<form action="csci218login.php" method="post"  >
<p>Username: <input type="text" name="name" /></p>
<p>Password: <input type="password" name="pwd" /></p>
<p><input type="submit" /></p>
</form>


 <?php echo $error?> .



</body>
</html>
