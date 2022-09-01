<?php include("hhead.php");
include("autoload.php");
 ?>
<div class="container-fluid">
	<div class="row" style="margin-top: 34px;">
		<div class="col-sm-5 col-md-5 col-xs-12 col-lg-5">
			<div class="jumbotron">
				<h2>Welcome to student review system!</h2>
				<p>Give your feed back..
					<a href=""></a>
				</p>
			</div>
		</div>
		<div class="col-sm-7 col-md-7 col-xs-12 col-lg-7">
			<h3>Recent Comments..</h3>
			<div class="row">
				<?php
					$data=reviews::read_reviews();
					for ($i=0; $i <count($data); $i++) { 
						
				 ?>
				 <b><img src="avatar.JPG" style="width: 44px;height: 44px;"><?php echo $data[$i]["student_name"]; ?> On: <span style="color: lightgrey;"><?php echo $data[$i]["date"]; ?></span></b>
				 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><?php echo $data[$i]["comment"]; ?></i><hr><p>
				<?php } ?>

			</div>
		</div>
	</div>
</div>

<?php include("ffoot.php"); ?>

