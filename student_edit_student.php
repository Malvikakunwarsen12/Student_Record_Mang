<?php
 $connection=mysqli_connect("localhost","root","" );
 $db=mysqli_select_db($connection,"sms");
 $query="update students set Name='$_POST[name]',Password='$_POST[password]',Email='$_POST[email]',Phonenum='$_POST[phonenum]',Marks='$_POST[marks]' where Student_id=' $_POST[student_id]'";
 $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details edited successfully.");
    window.location.href ="student_dashboard.php";
</script>
