<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-reviews.php'><i class='fa fa-list'></i>&nbsp;&nbsp;reviews</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;reviews</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new reviews($_GET['id']);
 echo $ss->update_reviews($student_name,$comment,$date,$feedback_type,$subject); }
 else{ 
 $ss=new reviews(); echo $ss->create_reviews($student_name,$comment,$date,$feedback_type,$subject); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; REVIEWS/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$student_name=$comment=$date=$feedback_type=$subject='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=reviews::get_reviews($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'> STUDENT NAME
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='student_name' class='form-control' placeholder='student_name' value='<?php

 echo $student_name; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> COMMENT
 
  </div>


 <div class='col-12 col-sm-9'><textarea name='comment' class='form-control' placeholder='comment' required='required'><?php

 echo $comment; 
 
  ?></textarea>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> DATE
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='date' value="<?php echo date('d-m-Y'); ?>" class='form-control' placeholder='date' value='<?php

 echo $date; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> FEEDBACK TYPE
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' value="comment" name='feedback_type' class='form-control' placeholder='feedback_type' value='<?php

 echo $feedback_type; 
 
  ?>' required='required' readonly>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'> SUBJECT
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='subject' class='form-control' placeholder='subject' value='<?php

 echo $subject; 
 
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