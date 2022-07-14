<!Doctype html>
<html>
    <head>
      
        <title>Student Dashboard</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        html
        {
            background:url(back3.jpg) no-repeat center center fixed;
       background-size:cover;
           

        }
     #header{
            height:10%;
            width:100%;
            top:2%;
            background-color:white;
            position:fixed;
            color:black;
        }
        #left_side
       {
           height: 80%;
           width:15%;
           top:20%;
          
           position:fixed;
       }
       #right_side
       {
           height: 75%;
           width:80%;
           top:20%;
           left:17%;
           position:fixed;
           
           /* background:url(back5.jpg) no-repeat center center fixed; */
       background-size:cover;
           color:red;
           /* border:solid 1px black; */
       }
   #top_span
   {
        top:17%;
        width:80%;
        position:fixed;
        left:17%;
    
   }
   #id 
   {
       border: solid 1px black;
       padding-left:2px;
       text-align: left;
       width: 300px;

   }

        </style>
        <?php
        session_start();
        $name="";
        $connection=mysqli_connect("localhost","root","" );
        $db=mysqli_select_db($connection,"sms");

       

        
        ?>
</head>


<body>
      <div id="header">
            <center><strong><h1>Student Management System</h1></strong>Email :
            <?php echo $_SESSION['email'];?> <br>Name : <?php echo $_SESSION['name'];?></center>
           
            <a href="logout.php"><p style="text-align:right;">Logout</p></a></div> 

 
 <!-- <div id="log" a href="logout.php"><p style="text-align:right;">Logout</p></a></div>  -->

  <span id="top_span"><marquee>Student control portal...</marquee></span>  
 <div id="left_side">
     <form action=" " method="post">
         <table>
                    

                     <tr>
                     <td>
                         <input type="submit" name="show_details" value="Show Details"><br><br>
                     </td>
                     </tr>

                     <tr>
                     <td>
                         <input type="submit" name="edit_details" value="Edit Details"><br><br>
                     </td>
                     </tr>
</table>
</form>
</div>
<div id="right_side"><br><br>
<div id="demo">
    <?php
    if(isset($_POST['show_details']))
    {
        $query="select * from students where Email ='$_SESSION[email]'";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            ?>
            <table>
                <tr>
                    <td>
                        <b>Student ID :</b>
                        <td>
                            <input type="text" value="<?php echo $row['Student_id']?>" disabled>
                        </td>
                    </td>
        </tr>

        <tr>
                    <td>
                        <b>Name :</b>
                        <td>
                            <input type="text" value="<?php echo $row['Name']?>" disabled>
                        </td>
                    </td>
        </tr>

        <tr>
                    <td>
                        <b>Email :</b>
                        <td>
                            <input type="text" value="<?php echo $row['Email']?>" disabled>
                        </td>
                    </td>
        </tr>


        <tr>
                    <td>
                        <b>Password :</b>
                        <td>
                            <input type="text" value="<?php echo $row['Password']?>" disabled>
                        </td>
                    </td>
        </tr>

        <tr>
                    <td>
                        <b>Phonenum :</b>
                        <td>
                            <input type="text" value="<?php echo $row['Phonenum']?>" disabled>
                        </td>
                    </td>
        </tr>


        <tr>
                    <td>
                        <b>Marks:</b>
                        <td>
                            <input type="text" value="<?php echo $row['Marks']?>" disabled>
                        </td>
                    </td>
        </tr>


        </table>
        <?php
        }
    }
    ?>

    <?php
    if(isset($_POST['edit_details']))
    {
    $query="select * from students where Email='$_SESSION[email]'";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run))
  {
      ?>
      <form action="student_edit_student.php" method="post">
      <table>
          <tr>
              <td>
                  <b>Student ID :</td>
                  <td>
                      <input type="text" name="student_id" value=<?php echo $row['Student_id']?>>
                  </td>
                 </tr>

                 <tr>
              <td>
                  <b>Name :</td>
                  <td>
                      <input type="text"   name="name" value=<?php echo $row['Name']?>>
                  </td>
                 </tr>


                 <tr>
              <td>
                  <b>Email :</td>
                  <td>
                      <input type="text" name="email" value=<?php echo $row['Email']?>>
                  </td>
                 </tr>


                 <tr>
                 <td>
                  <b>Password :</td>
                  <td>
                      <input type="password" name="password"  value=<?php echo $row['Password']?>>
                  </td>
                 </tr>


                 <tr>
              <td>
                  <b>Phone num :</td>
                  <td>
                      <input type="text" name="phonenum" value=<?php echo $row['Phonenum']?>>
                  </td>
                 </tr>

                 <tr>
                <td>
                  <b>Marks :</td>
                  <td>
                      <input type="text"  name="marks" value=<?php echo $row['Marks']?>>
                  </td>
                 </tr>


                 <tr>
                            <td></td>
                             <td><input type="submit" name="edit" value="Save"></td>
                        </tr>
                 
                 </table>
               </form>
                 <?php
  }
    }
    ?>
    </div>
</div>
</body>
</html>


