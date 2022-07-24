<?php
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"sms");
 $query="insert into students values('$_POST[student_id]','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[phonenum]','$_POST[marks]' )";
 $query_run=mysqli_query($connection,$query);
 ?>
 <script type="text/javascript">
    
      alert("Details added successfully ");
      window.location.href ="admin_dashboard.php";
</script>
