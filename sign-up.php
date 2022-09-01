<?php
include_once("hhead.php");
include_once("autoload.php");
$error="";
if (isset($_POST['go'])) {
	extract($_POST);
	$log=new users();
	$user_type="student";
	$date_registered=date('Y-m-d H:i:s');
	$log->create_users($username,$password,$full_names,$course,$school,$date_registered,$user_type);
		$_SESSION['user_details']=$_POST;
		echo "<script>window.location.href='login.php?message=your_account_has_been_created_please_login';</script>";
	
}
?>
<div class="container-fluid">
	<div class="row" style="margin-top:34px;">
		<div class="col-md-4 col-xs-4 col-lg-4"></div>
		<div class="col-md-4 col-xs-4 col-lg-4">
			<h3>User Registration Form</h3><hr><p>
			<?php echo $error; ?>
			<form class="form" method="POST">
				<div class="form-group">
					<b>Full Names</b>
					<input type="text" name="full_names" class="form-control" required>
				</div>
				<div class="form-group">
					<b>Course</b>
					<input type="text" name="course" class="form-control" required>
				</div>
				<div class="form-group">
					<b>School</b>
					<?php

					
					 ?>
					<select name="school" class="form-control" required>
						<option value="School of the arts">School of the arts</option>
						<option value="School of the Biological sciences">School of the Biological sciences</option>
						<option value="School of the Chemical sciences">School of the Chemical sciences</option>
						<option value="School of the Computer sciences">School of the Computer sciences</option>
						<option value="School of the Management">School of the Management</option>
						<option value="School of Communication">School of Communication</option>
						<option value="School of Educational Studies">School of Educational Studies</option>
						<option value="School of Housing, Building And Planning">School of Housing, Building And Planning</option>
					</select>
				</div>

				<div class="form-group">
					<b>email</b>
					<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<b>create a password</b>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-success btn-lg btn-block" name="go">Login</button>
				<p><a href="login.php"> Already registered? login here!</a></p>
			</form>
		</div>
		<div class="col-md-4 col-xs-4 col-lg-4"></div>
	</div>
</div>
<?php include_once("ffoot.php"); ?>