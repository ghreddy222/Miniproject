<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
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
		<center><strong>Student Management System </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:<?php echo $_SESSION['EMAIL'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <?php echo $_SESSION['NAME'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>WELCOME TO GITAM HYDERABAD WEBSITE.</marquee></span>
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

	<input class="button" type="submit" name="search_student" value="Search Student">
   </a>


      <a href="#">

		<input class="button" type="submit" name="edit_student" value="Edit Student">
   </a>

         <a href="#">

		<input class="button" type="submit" name="add_new_student" value="Add New Student">
   </a>

         <a href="#">

		<input class="button" type="submit" name="delete_student" value="Delete Student">
   </a>


         <a href="#">

		<input class="button" type="submit" name="show teacher" value="Show Teachers">
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
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="REGISTRATION_NUMBER">
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Student's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from student_database where REGISTRATION_NUMBER = '$_POST[REGISTRATION_NUMBER]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table>
							<tr>
								<td>
									<b>Registration number:</b>
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
									<b>Class:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['BRANCH']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['PHONE']?>" disabled>
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
									<textarea rows="1" cols="10" disabled><?php echo $row['INTER_MARKS']?></textarea>
								</td>
							</tr>
						<tr>
								<td>
									<b>Current Semester Marks:</b>
								</td> 
								<td>
									<textarea rows="1" cols="10" disabled><?php echo $row['SEMESTER_MARKS']?></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<b>B.tech Marks:</b>
								</td> 
								<td>
									<textarea rows="1" cols="10" disabled><?php echo $row['B.TECH_MARKS']?></textarea>
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
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="REGISTRATION_NUMBER">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from student_database where REGISTRATION_NUMBER = $_POST[REGISTRATION_NUMBER]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_student.php" method="post">
						<table>
							<tr>
								<td>
									<b>Registration number:</b>
								</td> 
								<td>
									<input type="text" name="REGISTRATION_NUMBER" value= "<?php echo $row['REGISTRATION_NUMBER'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" name="NAME" value="<?php echo $row['NAME']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Gender:</b>
								</td> 
								<td>
									<input type="text" name ="GENDER" value="<?php echo $row['GENDER']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Class:</b>
								</td> 
								<td>
									<input type="text" name ="BRANCH" value="<?php echo $row['BRANCH']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" name ="PHONE" value="<?php echo $row['PHONE']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Date of Birth:</b>
								</td> 
								<td>
									<input type="text" name="DATE_OF_BIRTH" value="<?php echo $row['DATE_OF_BIRTH']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>10th Marks:</b>
								</td> 
								<td>
									<textarea rows="1" name ="10TH_MARKS" cols="10" ><?php echo $row['10TH_MARKS']?></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<b>Inter Marks:</b>
								</td> 
								<td>
									<textarea rows="1" name="INTER_MARKS" cols="10" ><?php echo $row['INTER_MARKS']?></textarea>
								</td>
							</tr>
						<tr>
								<td>
									<b>Current Semester Marks:</b>
								</td> 
								<td>
									<textarea rows="1" name="SEMESTER_MARKS" cols="10" ><?php echo $row['SEMESTER_MARKS']?></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<b>B.tech Marks:</b>
								</td> 
								<td>
									<textarea rows="1" name="B.TECH_MARKS" cols="10" ><?php echo $row['B.TECH_MARKS']?></textarea>
								</td>
							</tr>


							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" name="EMAIL" value="<?php echo $row['EMAIL']?>" >
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="password" name="PASSWORD" value="<?php echo $row['PASSWORD']?>" >
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
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="REGISTRATION_NUMBER">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Registration Number:</b>
							</td> 
							<td>
								<input type="text" name="REGISTRATION_NUMBER" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="NAME" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Gender:</b>
							</td> 
							<td>
								<input type="text" name="GENDER" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Date of Birth:</b>
							</td> 
							<td>
								<input type="text" name="DATE_OF_BIRTH" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Branch:</b>
							</td> 
							<td>
								<input type="text" name="BRANCH" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Phone:</b>
							</td> 
							<td>
								<input type="text" name="PHONE" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>INTER MARKS:</b>
							</td> 
							<td>
								<textarea rows="1" cols="10" placeholder="Optional" name="INTER_MARKS"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<b>SEMESTER MARKS:</b>
							</td> 
							<td>
								<textarea rows="1" cols="10" placeholder="Optional" name="SEMESTER_MARKS"></textarea>
							</td>
						</tr>

						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="EMAIL" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>PASSWORD:</b>
							</td> 
							<td>
								<input type="password" name="PASSWORD" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h5>Teacher's Details</h5>
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Mobile</b></td>
								<td id="td"><b>Courses</b></td>
								<td id="td"><b>View Detail</b></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teacher";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['course']?></td>
								<td id="td"><a href="#">View</a></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>