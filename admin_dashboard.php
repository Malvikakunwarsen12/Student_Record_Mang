<!doctype html>
<html>
    <head>
        <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
         html
   {
       background:url(back2.jpg) no-repeat center center fixed;
       background-size:cover;
   }
         #header{
            height:10%;
            width:100%;
            top:2%;
            /* background-color:white; */
            position:fixed;
            color:brown;
        }
        #left_side
       {
           height: 75%;
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
           /* background-color:; */
           color:red;
           /* border:solid 1px black; */
           /* background:url(bakc7.jpg) no-repeat center center fixed; */
            /* background-size:contain; */
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
       text-align: center;
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

  <span id="top_span"><marquee>Admin control portal...</marquee></span>  
 <div id="left_side">
     <form action=" " method="post">
         <table>
                    

                     <tr>
                     <td>
                         <input type="submit" name="search_student" value="Search Student"><br><br>
                     </td>
                     </tr>

                     <tr>
                     <td>
                         <input type="submit" name="edit_student" value="Edit Student"><br><br>
                     </td>
                     </tr>


                     <tr>
                     <td>
                         <input type="submit" name="add_student" value="Add Student"><br><br>
                     </td>
                     </tr>


                     <tr>
                     <td>
                         <input type="submit" name="delete_student" value="Delete Student"><br><br>
                     </td>
                     </tr>

                     <tr>
                     <td>
                         <input type="submit" name="show_teachers" value="Show Teachers"><br><br>
                     </td>
                     </tr>
</table>
</form>
</div>
<div id="right_side"><br><br>
 <div id="demo"> 
       <?php
       if(isset($_POST['search_student']))  
       {
           ?>
           <center>
               <form action="" method="post">
                   Enter Student ID :
                   <input type="text" name="student_id">
                   <input type="submit" name="search_by_id_by_search" value="Search">
       </form>
       </center>
       <?php
       } 
       if(isset($_POST['search_by_id_by_search']))
       {
            $query="select * from students where Student_id = '$_POST[student_id]'";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($query_run))
            {
                ?>
                <table>
                        <tr>
                        <td><b>Student ID : </b></td>
                        <td>
                        <input type="text" value="<?php echo $row['Student_id'];?>"disabled>
                        </td>
                        </tr>


                        <tr>
                        <td><b>Name : </b></td>
                        <td>
                        <input type="text" value="<?php echo $row['Name'];?>"disabled>
                        </td>
                        </tr>


                        <tr>
                        <td><b>Email : </b></td>
                        <td>
                        <input type="text" value="<?php echo $row['Email'];?>"disabled>
                        </td>
                        </tr>


                        <tr>
                        <td><b>Phone Number : </b></td>
                        <td>
                        <input type="text" value="<?php echo $row['Phonenum'];?>"disabled>
                        </td>
                        </tr>


                        <tr>
                        <td><b>Marks : </b></td>
                        <td>
                        <input type="text" value="<?php echo $row['Marks'];?>"disabled>
                        </td>
                        </tr>
                        </table>

              <?php
            }
       }
       ?>

   <!-- code for edit  -->


       <?php
       if(isset($_POST['edit_student']))  
       {
           ?>
           <center>
               <form action="" method="post">
                   Enter Student ID :
                   <input type="text" name="student_id">
                   <input type="submit" name="search_by_id_by_edit" value="Search">
       </form>
       </center>
       <?php
       } 
       if(isset($_POST['search_by_id_by_edit']))
       {
            $query="select * from students where Student_id = $_POST[student_id]";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($query_run))
            {
                ?>
                <form action="admin_edit_student.php" method="post">
                <table>
                        
                
                         <tr>
                        <td><b>Student ID : </b></td>
                        <td>
                        <input type="text" name="student_id" value="<?php echo $row['Student_id'];?>">
                        </td>
                        </tr>

                        <tr>
                        <td><b>Name : </b></td>
                        <td>
                        <input type="text" name="name" value="<?php echo $row['Name'];?>">
                        </td>
                        </tr>


                        <tr>
                        <td><b>Email : </b></td>
                        <td>
                        <input type="text" name="email" value="<?php echo $row['Email'];?>">
                        </td>
                        </tr>


                        <tr>
                        <td><b>Password : </b></td>
                        <td>
                        <input type="password" name="password" value="<?php echo $row['Password'];?>">
                        </td>
                        </tr>


                        <tr>
                        <td><b>Phone Number : </b></td>
                        <td>
                        <input type="text" name="phonenum" value="<?php echo $row['Phonenum'];?>">
                        </td>
                        </tr>


                        <tr>
                        <td><b>Marks : </b></td>
                        <td>
                        <input type="text" name="marks" value="<?php echo $row['Marks'];?>">
                        </td>
                        </tr><br>
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
    


            
            <!-- Code to add student  -->
     <?php
      if(isset($_POST['add_student']))
      {
              ?>
              <center><h4>Fill the given details :</h4></center>
              <form action="add_student.php" method="post">
                  <table>
                      <tr>
                            <td>Student ID : </td>
                            <td>
                                <input type="text" name="student_id" required>
                            </td>
                            </tr>


                            <tr>
                            <td>Name : </td>
                            <td>
                                <input type="text" name="name" required>
                            </td>
                            </tr>


                            <tr>
                            <td>Email : </td>
                            <td>
                                <input type="text" name="email" required>
                            </td>
                            </tr>


                            <tr>
                            <td>Password : </td>
                            <td>
                                <input type="text" name="password" required>
                            </td>
                            </tr>
                          
                            <tr>
                            <td>Phonenum : </td>
                            <td>
                                <input type="text" name="phonenum" required>
                            </td>
                            </tr>

                            <tr>
                            <td>Marks : </td>
                            <td>
                                <input type="text" name="marks" required>
                            </td>
                            </tr>

                            <tr>
                            <td></td>
                               <td> <input type="submit" name="add" value="Add Student"> </td>
                            </td>
                            </tr>
      </table>
      </form>
   <?php
      }
      ?>
      <!-- Code to delete student  -->


      <?php
      if(isset($_POST['delete_student']))
      {
         ?>
         <center>
           
             <h3>Enter Student ID of student whose details you want to delete</h3>
              <form action="delete_student.php" method="post">
                  Student ID :&nbsp&nbsp&nbsp<input type="text" name="student_id">
              <input type="submit" name="search_student_id_delete" value="Delete Student">
      </form>
      </center>
      <?php

      }
      ?>


<!-- Code for show teachers -->

<?php
    if(isset($_POST['show_teachers']))
    {
        ?>
       
        <center><h3>Teacher's Details are :
            <br><br>
         <table style="border-collapse: collapse ; border:1px solid black;"> 
            <tr>
                <td id="id"><b>ID</b></td>
                <td id="id"><b>Name</b></td>
                <td id="id"><b>Phonenum</b></td>
                <td id="id"><b>Courses</b></td>
            </tr>
    </table>
    </center>

    <?php
      $connection=mysqli_connect("localhost","root","");
      $db=mysqli_select_db($connection,"sms");
      $query="select * from teachers";
      $query_run=mysqli_query($connection,$query);
      while($row=mysqli_fetch_assoc($query_run))
      {
          ?>
          <center>
               <table style="border-collapse: collapse;border:1px solid black;"> 
                 
                  <tr>
                      <td id="id"><?php echo $row['Teacher_id'];?></td>
                      <td id="id"><?php echo $row['Name'];?></td>
                      <td id="id"><?php echo $row['Phonenum'];?></td>
                      <td id="id"><?php echo $row['Courses'];?></td>
                      </tr>
                      
                      </table>
                      </center>
                    <?php
      }
    }
    ?>
</div>   
</body>
</html>











