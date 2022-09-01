<?php
 

 class DB{
 static function connect(){
 $host='localhost';

 $dbuser='id18970562_feedback_sys';

 $dbpass='DGR)M4-T~5xnXM0K';

 $dbname='id18970562_feedback_system';

 try{
$con=new PDO('mysql:host='.$host.';dbname='.$dbname,$dbuser,$dbpass); 
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

 return $con;

 } catch(PDOException $e){ die('Oops! database error: '.$e); } 
} 
 } 
 
  ?>