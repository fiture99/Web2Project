
<?= include_once "backend/db.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    
</head>
<body>

    <main>
        <div class="login-header">
            
            <div class="img-wrapper">
                <img src="driver.jpg" alt="User Lego">
            </div>

            <span>Sign in here Mr Driver</span>
            
        </div>

        <form method="POST">
        <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>
                <span id="error-message" style="font-size: 14px; text-align: left; margin-bottom: 4px; color: red;"></span>
            <input type="text" name ="email" placeholder="Email" >  
           
            
            <input type="password" name ="password" placeholder="password" >
            <button  name= 'login'>Login</button>
            
           
        </form>
        <p><a href="forgot-password.html">Forgot Username/Password?</a></p>
    </main>
    <footer>
            <p><a href="drivers.php">Create new account</a></p>
    </footer>

    <!-- <script src="drivers_login.js"></script> -->
</body>
</html>


