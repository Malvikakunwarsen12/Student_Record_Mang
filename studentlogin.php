<!doctype html>
<html>
    <head>
        <title>Student Login Page</title>
         <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	     <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	     <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
html
   {
       background:url(bg16.jpg) no-repeat center center fixed;
       background-size:cover;
   }
   </style>
<body>
    <center><br><br>
    <h1>Student Login</h1>
    <form action= " " method="post">
       Email:<input type="text" name="email" required>
       <br><br>
       Password:<input type="password" name="password" required>
       <br><br>
       <input type="submit" name="submit">
       <?php
         session_start();
         $email="";
         $name="";
       if(isset($_POST['submit']))
       {
           $connection=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($connection,"sms");
           $query="select * from students where email ='$_POST[email]'";
           $query_run=mysqli_query($connection,$query);
           while($row=mysqli_fetch_assoc($query_run))
           
           {
                   if($row['Email']==$_POST['email'])
                   {
                        if($row['Password']==$_POST['password'])
                        { 
                            $_SESSION['email']=$row['Email'];
                            $_SESSION['name']=$row['Name'];
                            header("Location: student_dashboard.php");
                        }
                         
                        else
                          echo "<br><br>Wrong Password !!!";
                   }

                 else 
                   echo "<br><br>Wrong Email ID !!!";
           }
       }
       ?>
</form>

</center>

</body>
    </html>