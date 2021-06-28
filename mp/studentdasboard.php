<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"mp");
	?>
</head>
<body>
		 <center> <img src="gitamlogo.PNG" alt="GITAM" width="400" height="100"> 
</center><br><br><br>



	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['EMAIL'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['NAME'];?> 
		<a href="logout.php">Logout</a>

		</center>
	</div>
	<span id="top_span"><marquee>Note:- Welcome to GITAM HYDERABAD Portal.</marquee></span>
	<div id="left_side">
		<br><br><br>





		<form action="" method="post">
		
			<table>

				<tr>
					<td>

  <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Dashboard</header>
      <a href="#">

		<input class="button" type="submit" name="show_detail" value="Show Details">
   </a>

    </div>
			</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from student_database where EMAIL = '$_SESSION[EMAIL]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<table>
					<tr>
						<td>
							<b>Registration Number:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['REGISTRATION_NUMBER']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['NAME']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Gender:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['GENDER']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Branch:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['BRANCH']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Date of Birth:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['DATE_OF_BIRTH']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['EMAIL']?>" disabled>
						</td>
					</tr>

					<tr>
						<td>
							<b>10th Marks:</b>
						</td> 
						<td>
							<textarea rows="1" cols="10" disabled><?php echo $row['10TH_MARKS']?></textarea>
						</td>
					</tr>


					<tr>
						<td>
							<b>Inter Marks:</b>
						</td> 
						<td>
							<textarea rows="3" cols="40" disabled><?php echo $row['INTER_MARKS']?></textarea>
						</td>
					</tr>

					<tr>
						<td>
							<b>Semester Marks:</b>
						</td> 
						<td>
							<textarea rows="3" cols="40" disabled><?php echo $row['SEMESTER_MARKS']?></textarea>
						</td>
					</tr>

					<tr>
						<td>
							<b>B.tech Marks:</b>
						</td> 
						<td>
							<textarea rows="3" cols="40" disabled><?php echo $row['B.TECH_MARKS']?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['PASSWORD']?>" disabled>
						</td>
					</tr>

				</table>
				<?php
				}	
			}
			?>


		</div>
	</div>
</body>
</html>