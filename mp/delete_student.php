<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"mp");
		$query = "delete from student_database where REGISTRATION_NUMBER = $_POST[REGISTRATION_NUMBER]";
		$query_run = mysqli_query($connection,$query);
		?>");
	window.location.href = "admindasboard.php";	}
	else
	{
	window.location.href = "admindasboard.php";	}
</script>
