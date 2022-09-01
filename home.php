<?php include_once("head.php");
include_once("autoload.php");
$labels=array("School of the arts","School of the Biological sciences","School of the Chemical sciences","School of the Computer sciences","School of the Management","School of Communication","School of Educational Studies","School of Educational Studies","School of Housing, Building And Planning");

                    $values=array(count(users::search_marched_users("school","School of the arts")),count(users::search_marched_users("school","School of the Biological sciences")),count(users::search_marched_users("school","School of the Chemical sciences")),count(users::search_marched_users("school","School of the Computer sciences")),count(users::search_marched_users("school","School of the Management")),count(users::search_marched_users("school","School of Communication")),count(users::search_marched_users("school","School of Educational Studies")),count(users::search_marched_users("school","School of Educational Studies")),count(users::search_marched_users("school","")),count(users::search_marched_users("school","School of Housing, Building And Planning")));
 ?>
 <style type="text/css">
     
     @import url(https://fonts.googleapis.com/css?family=Roboto);

body {
  font-family: Roboto, sans-serif;
}

#chart {
 
}
 </style>
<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
<div class="row" style="min-height: 450px;">
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12" style="min-height: 450px;">
        <div id="chart" style=" max-width: 650px; margin: 35px auto;height: 400px; border:1px solid grey;">
</div>
    </div>
</div>

                        <?php //print_r($labels); print_r($values);
                         ?>
  
<?php include_once("foot.php"); ?>