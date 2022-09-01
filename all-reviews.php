<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>
 <div class='row' id='row' style='margin-top:24px;padding:4px;'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-reviews.php'><i class='fa fa-list'></i>&nbsp;&nbsp;All REVIEWS</a></li> </ul>
 
  </div>

 
  </div>
 <style>#row{margin-top:24px;}</style>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <div class='btn-group'><a href='add-reviews.php' class='btn btn-info'><i class='fa fa-plus'></i> ADD NEW</a><a class='btn btn-primary' href='all-reviews.php' class='btn btn-default'><i class='fa fa-refresh'></i> reviews List</a>
 
  </div>

 
  </div></div>

 <div class='row' id='row'><div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><form class='form-inline'><i class='fa fa-calendar'> Search Between Dates: </i>
 <div class='input-group'><input type='date' name='date1' class='form-control' required='required'><input type='date' name='date2' class='form-control' required='required'><button type='submit' class='btn btn-default'>&nbsp;<i class='fa fa-search'></i>&nbsp;&nbsp;SEARCH</button>
 
  </div>
</form>
 
  </div></div>

 <div class='row' id='row'><div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <form class='form-inline'>
 <div class='input-group'><select name='type' class='form-control' required='required'><option value='student_name'>STUDENT NAME</option><option value='comment'>COMMENT</option><option value='date'>DATE</option><option value='feedback_type'>FEEDBACK TYPE</option><option value='subject'>SUBJECT</option></select><input type='text' name='query' class='form-control' required='required'><button style='margin-left:4px;border:1px solid lightgrey;' name='check' type='submit' class='btn btn-info'><i class='fa fa-search'></i> SEARCH</button>
 
  </div>
</form>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
<?php

 if(isset($_GET['id'])){ $r=new reviews($_GET['id']); 
 $r->delete_reviews();
 echo '<script>alert("ITEM WAS DELETED!"); window.location.href="all-reviews.php";</script>
';  } 
 $alldata=reviews::read_reviews(); $column=reviews::reviews_constants(); 
 if(isset($_GET['check']) && isset($_GET['type']) && isset($_GET['query'])){ 
 if(in_array($_GET['type'],$column)){ 
 $alldata=reviews::search_reviews($_GET['type'],$_GET['query']); }
 else{
 $alldata=reviews::read_reviews();
} 
 if(isset($_GET['date1']) && isset($_GET['date2'])){
 extract($_GET); 
  $alldata= reviews::check_between_dates_reviews($date1,$date2); 
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
<tr><th class='student_name'>STUDENT NAME</th><th class='comment'>COMMENT</th><th class='date'>DATE</th><th class='feedback_type'>FEEDBACK TYPE</th><th class='subject'>SUBJECT</th><td class='Edit'>Edit</td><td class='Delete'>Delete</td></tr>
</thead><tbody>
 <?php

 
 for($i=0; $i<count($alldata); $i++){ 
 $raw=$alldata[$i]; 
 
  ?><tr><td class='student_name'><?php

 echo $raw['student_name']; 
 
  ?></td><td class='comment'><?php

 echo $raw['comment']; 
 
  ?></td><td class='date'><?php

 echo $raw['date']; 
 
  ?></td><td class='feedback_type'><?php

 echo $raw['feedback_type']; 
 
  ?></td><td class='subject'><?php

 echo $raw['subject']; 
 
  ?></td><td class='Edit'><a href='add-reviews.php?id=<?php

 echo $raw['review_id']; 
 
  ?>' class='btn btn-success'><i class='fa fa-edit'></i> EDIT</a></td><td class='Delete'><a href='all-reviews.php?id=<?php

 echo $raw['review_id']; 
 
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