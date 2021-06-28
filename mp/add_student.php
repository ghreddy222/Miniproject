
<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"mp");
	$query = "insert into student_database values('',
	'$_POST[REGISTRATION_NUMBER]',
	'$_POST[NAME]',
	'$_POST[GENDER]',
	'$_POST[BRANCH]',

	'$_POST[DATE_OF_BIRTH]',
	'$_POST[PHONE]',
	'$_POST[EMAIL]',
	'',
	'$_POST[INTER_MARKS]',
	'$_POST[SEMESTER_MARKS]',
	'',
	'$_POST[PASSWORD]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admindasboard.php";
</script>

