<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>
 <div class='row' id='row' style='margin-top:24px;padding:4px;'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-course_events.php'><i class='fa fa-list'></i>&nbsp;&nbsp;All COURSE EVENTS</a></li> </ul>
 
  </div>

 
  </div>
 <style>#row{margin-top:24px;}</style>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <div class='btn-group'><a href='add-course_events.php' class='btn btn-info'><i class='fa fa-plus'></i> ADD NEW</a><a class='btn btn-primary' href='all-course_events.php' class='btn btn-default'><i class='fa fa-refresh'></i> course_events List</a>
 
  </div>

 
  </div></div>

 <div class='row' id='row'><div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><form class='form-inline'><i class='fa fa-calendar'> Search Between Dates: </i>
 <div class='input-group'><input type='date' name='date1' class='form-control' required='required'><input type='date' name='date2' class='form-control' required='required'><button type='submit' class='btn btn-default'>&nbsp;<i class='fa fa-search'></i>&nbsp;&nbsp;SEARCH</button>
 
  </div>
</form>
 
  </div></div>

 <div class='row' id='row'><div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <form class='form-inline'>
 <div class='input-group'><select name='type' class='form-control' required='required'><option value='teacher_name'>TEACHER NAME</option><option value='event_title'>EVENT TITLE</option><option value='event_description'>EVENT DESCRIPTION</option><option value='date_created'>DATE CREATED</option><option value='school'>SCHOOL</option></select><input type='text' name='query' class='form-control' required='required'><button style='margin-left:4px;border:1px solid lightgrey;' name='check' type='submit' class='btn btn-info'><i class='fa fa-search'></i> SEARCH</button>
 
  </div>
</form>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
<?php

 if(isset($_GET['id'])){ $r=new course_events($_GET['id']); 
 $r->delete_course_events();
 echo '<script>alert("ITEM WAS DELETED!"); window.location.href="all-course_events.php";</script>
';  } 
 $alldata=course_events::read_course_events(); $column=course_events::course_events_constants(); 
 if(isset($_GET['check']) && isset($_GET['type']) && isset($_GET['query'])){ 
 if(in_array($_GET['type'],$column)){ 
 $alldata=course_events::search_course_events($_GET['type'],$_GET['query']); }
 else{
 $alldata=course_events::read_course_events();
} 
 if(isset($_GET['date1']) && isset($_GET['date2'])){
 extract($_GET); 
  $alldata= course_events::check_between_dates_course_events($date1,$date2); 
 } 
 } 
  ?>
<center><b><?php

 echo count($alldata); 
 
  ?> Records Found. <?php

 if(isset($_GET['type']) && isset($_GET['query'])){ echo 'search results for: '.$_GET['type'].' / '.$_GET['query']; }
 
  ?></b></center><p><hr><p>
 <div class='table-responsive'>

<div class='table-responsive'>
<table id='table' style='width:100%;' border='1' cellpadding='2' class='table table-striped table-responsive table-hoverable table-bordered' id='table'>
 <thead>
<tr><th class='teacher_name'>TEACHER NAME</th><th class='event_title'>EVENT TITLE</th><th class='event_description'>EVENT DESCRIPTION</th><th class='date_created'>DATE CREATED</th><th class='school'>SCHOOL</th><td class='Edit'>Edit</td><td class='Delete'>Delete</td></tr>
</thead><tbody>
 <?php

 
 for($i=0; $i<count($alldata); $i++){ 
 $raw=$alldata[$i]; 
 
  ?><tr><td class='teacher_name'><?php

 echo $raw['teacher_name']; 
 
  ?></td><td class='event_title'><?php

 echo $raw['event_title']; 
 
  ?></td><td class='event_description'><?php

 echo $raw['event_description']; 
 
  ?></td><td class='date_created'><?php

 echo $raw['date_created']; 
 
  ?></td><td class='school'><?php

 echo $raw['school']; 
 
  ?></td><td class='Edit'><a href='add-course_events.php?id=<?php

 echo $raw['event_id']; 
 
  ?>' class='btn btn-success'><i class='fa fa-edit'></i> EDIT</a></td><td class='Delete'><a href='all-course_events.php?id=<?php

 echo $raw['event_id']; 
 
  ?>' class='btn btn-danger'><i class='fa fa-trash'></i> TRASH</a></td> <tr><?php

 } 
 
  ?>
</tbody></table>
</div> 
  </div>

 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
   ?>