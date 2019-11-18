<?php 
ob_start();
session_start();
include_once("config.php");


//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'login_db';
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
// db connection ended


if(isset($_POST['login']))
{
    $email =  $_POST['email'];
	$password =  $_POST['password'];

    if(!empty($email) AND !empty($password))
    {
        $sql_query = "SELECT * FROM users WHERE email= '$email' AND password= '$password'";
        $run = mysqli_query($conn, $sql_query);

        echo $rows = mysqli_num_rows($run);


		if($rows == 1 )
		{
            $res = mysqli_fetch_assoc($run);

		    $_SESSION['id'] = $res['id'];
		    $_SESSION['user_name'] = $res['user_name'];
		    $_SESSION['email'] = $email;
		    
		   $success = "Login successfully!";
		   $_SESSION['success'] = $success;

		   echo "<script>window.location.href='dashboard.php'</script>";
		}
	    else
		{
			$_SESSION['error'] = "Invalid / Wrong Email and Password";
			header("Location: index.php");
		}
    }
    else
    {
        $_SESSION['error'] = "Login and Password Both are required";
            header("Location: index.php");           
    }
}
?>
