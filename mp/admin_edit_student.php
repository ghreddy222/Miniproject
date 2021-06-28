<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"mp");
	$query = "update student_database set NAME='$_POST[NAME]',
	GENDER='$_POST[GENDER]',
	DATE_OF_BIRTH='$_POST[DATE_OF_BIRTH]',
	BRANCH='$_POST[BRANCH]',
	PHONE='$_POST[PHONE]',
	EMAIL='$_POST[EMAIL]',
	PASSWORD='$_POST[PASSWORD]',
	INTER_MARKS='$_POST[INTER_MARKS]',
	SEMESTER_MARKS='$_POST[SEMESTER_MARKS]' where REGISTRATION_NUMBER = $_POST[REGISTRATION_NUMBER]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details successfully Saved.");
	window.location.href = "admindasboard.php";
</script>
