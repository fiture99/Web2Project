
<?= include_once "db1.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">￼
￼		
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>
    
</head>
<body>
 <main>
        <div class="login-header">
            
            <div class="img-wrapper">
                <img src="../driver.jpg" alt="User Lego">
            </div>

            <span>Admin Login</span>
            
        </div>

        <form method="POST">
        <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>
                <span id="error-message" style="font-size: 14px; text-align: left; margin-bottom: 4px; color: red;"></span>
            <input type="text" name ="full_name" placeholder="Full Name" >  
           
            
            <input type="password" name ="password" placeholder="password" >
            <button  name= 'login'>Login</button>
            
           
        </form>
        
    </main>
    
</body>
</html>


