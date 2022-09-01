<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-course_events.php'><i class='fa fa-list'></i>&nbsp;&nbsp;course_events</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;course_events</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new course_events($_GET['id']);
 echo $ss->update_course_events($teacher_name,$event_title,$event_description,$date_created,$school); }
 else{ 
 $ss=new course_events(); echo $ss->create_course_events($teacher_name,$event_title,$event_description,$date_created,$school); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; COURSE EVENTS/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$teacher_name=$event_title=$event_description=$date_created=$school='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=course_events::get_course_events($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'> TEACHER NAME
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='teacher_name' class='form-control' placeholder='teacher_name' value='<?php

 echo $teacher_name; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> EVENT TITLE
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='event_title' class='form-control' placeholder='event_title' value='<?php

 echo $event_title; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> EVENT DESCRIPTION
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='event_description' class='form-control' placeholder='event_description' value='<?php

 echo $event_description; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> DATE CREATED
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='date_created' class='form-control' placeholder='date_created' value='<?php

 echo $date_created; 
 
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