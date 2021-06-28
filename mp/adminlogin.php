
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login Form</title>
    <link href="aslogin.css" rel="stylesheet" id="style">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

         <center><img src="GITAM-logo.png" alt="GITAM" width="400" height="150"> </center>
  <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"> Admin Login</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"> Enter Credentials </label>
        <div class="login-form">
            <div class="sign-in-htm">
    <center>
        <form action="" method="post">

                <div class="group">
                    <label for="user" class="label">Email</label>
                    <input type="text" name="email" required class="input" placeholder="Enter Mail Id">
                </div>


                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input type="password" name="password" required class="input" placeholder="Enter Password">
                </div>


                <div class="group">
                    <input type="submit" name="submit" class="button" value="LogIn">
                </div>


        </form>
        </center>
 
 
            <div class="for-pwd-htm">
  

                <div class="hr"></div>
            </div>
        </div>
    </div>
</div>
       <?php
            session_start();
            $EMAIL="";
            $NAME="";
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"mp");
                $query = "select * from login where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    if($row['EMAIL'] == $_POST['email']){
                        if($row['PASSWORD'] == $_POST['password']){
                            $_SESSION['NAME'] =  $row['NAME'];
                            $_SESSION['EMAIL'] =  $row['EMAIL'];
                            header("Location: admindasboard.php");
                        }
                        else{
                            ?>
                            <span>Wrong Password !!</span>
                            <?php
                        }
                    }
                }
                
            }
        ?>


        </body>
</html>