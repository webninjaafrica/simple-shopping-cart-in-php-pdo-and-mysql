<?php
include_once("hhead.php");
include("autoload.php");
$error="";
if (isset($_POST['go'])) {
	extract($_POST);
	$log=users::login_users($user_email,$user_pass);
	if ($log['row_count'] >0) {
		$_SESSION['user_details']=$log['rows'];
		if (isset($_GET['source'])) {
			echo "<script>window.location.href='".$_GET['source'].".php';</script>";
		}else{
		echo "<script>window.location.href='home.php';</script>"; }
	}else{
	$error="<div class='alert alert-danger'>Incorrect login credentials</div>";
}
}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-xs-4 col-lg-4"></div>
		<div class="col-md-4 col-xs-4 col-lg-4">
			<?php if (isset($_GET['message'])) {
			 ?>
			 <div class="alert alert-info">
			 	<?php echo str_replace("_", " ", $_GET['message']); ?>
			 </div>
		<?php } ?>
		<h3>Login To your Account</h3><hr><p>
			<?php echo $error; ?>
			<form class="form" method="POST">
				<div class="form-group">
					<b>email</b>
					<input type="text" name="user_email" class="form-control" required>
				</div>
				<div class="form-group">
					<b>password</b>
					<input type="password" name="user_pass" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-info btn-lg btn-block" name="go">Login</button>
				<p><a href="sign-up.php"> Dont have any account? sign up here!</a></p>
			</form>
		</div>
		<div class="col-md-4 col-xs-4 col-lg-4"></div>
	</div>
</div>
<?php include_once("ffoot.php"); ?>