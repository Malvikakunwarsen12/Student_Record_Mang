<!DOCTYPE html>
<html>
<head>
       <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
     #header{
            height:30%;
            width:100%;
            top:10%;
            margin:0 auto;
            /* background-color:black; */
            position:fixed;
            color:black;
        }
#id 
   {
       /* border: solid 2px black; */
       padding-left:20px;
       text-align: center;
       width: 500px;
       height:20px;

   }
   .container
   {
       width: 500px;
       align:center;
       margin:0 auto; 
       margin-top:80px;
       padding :30px 15px;
       font-family:Times, "Times New Roman",serif;
        text-align:center;
       /* border-style:outset; */
        /* background-color:#FFDEAD; */
        /* background:url(img7.jpg) no-repeat center center fixed ; */
        background-size:contain;
   }
   html
   {
       background:url(bg1.jpg) no-repeat center center fixed;
       background-size:cover;
   }
   </style>
<body >
   
    <!-- <nav class ="navbar fixed-top navbar navbar-dark bg-dark"> -->
        <!-- <b><h1> <FONT COLOR ="#ff0000">Graphic </FONT>Era</b></h1> -->
         <!-- <p><b>Transforming Dreams Into Reality </b></p> -->
<!-- </nav> -->


    <center>
    <div id="header">
    <h1>Student Management System</h1>
</div>
<br>
<div class="container" >
    <!-- <table style="border-collapse: collapse ; border:1px solid black;">  -->
            <tr>
                <td id="id"><b><h1><u>LogIn Page</u></h1></b></td>
            </tr>

</table>
<br>
        <h1>Choose the access</h1>
        

        <form action=" "method="post">
            
            <input type="submit" name="admin_login" value="Admin Login" >
            &nbsp&nbsp&nbsp&nbsp<input type="submit" name="student_login" value="Student Login" >
            
        </form>
</div>
        <?php
              if(isset($_POST['admin_login']))
              {
                    header("Location: adminlogin.php");
              }
             if(isset($_POST['student_login']))
                 header("Location: studentlogin.php");
             
        ?>
    </center>
</body>
</html>