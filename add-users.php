<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-users.php'><i class='fa fa-list'></i>&nbsp;&nbsp;users</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;users</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new users($_GET['id']);
 echo $ss->update_users($username,$password,$full_names,$course,$school,$date_registered,$user_type); }
 else{ 
 $ss=new users(); echo $ss->create_users($username,$password,$full_names,$course,$school,$date_registered,$user_type); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; USERS/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$username=$password=$full_names=$course=$school=$date_registered=$user_type='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=users::get_users($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'> USERNAME
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='username' class='form-control' placeholder='username' value='<?php

 echo $username; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> PASSWORD
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='password' class='form-control' placeholder='password' value='<?php

 echo $password; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> FULL NAMES
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='full_names' class='form-control' placeholder='full_names' value='<?php

 echo $full_names; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> COURSE
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='course' class='form-control' placeholder='course' value='<?php

 echo $course; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> SCHOOL
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='school' class='form-control' placeholder='school' value='<?php

 echo $school; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> DATE REGISTERED
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='date_registered' class='form-control' placeholder='date_registered' value='<?php

 echo $date_registered; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> USER TYPE
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='user_type' class='form-control' placeholder='user_type' value='<?php

 echo $user_type; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 
  </div>

 <div class='card-footer'><button type='submit' name='save' class='btn btn-primary'><i class='fa fa-save'></i> OKAY</button>
 
  </div>

 
  </div>
</form>
 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
  ?>