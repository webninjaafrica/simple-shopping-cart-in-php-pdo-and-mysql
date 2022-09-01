<?php

 include_once('autoload.php'); 

 class reviews{

  
 var $primary_key; 
 function __construct($review_id=''){ 
 $this->primary_key=$review_id;
}

public function create_reviews($mgo_student_name,$mgo_comment,$mgo_date,$mgo_feedback_type,$mgo_subject){
$q='insert into reviews(student_name,comment,date,feedback_type,subject) values(:student_name,:comment,:date,:feedback_type,:subject)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':student_name',$mgo_student_name);
$stmt->bindParam(':comment',$mgo_comment);
$stmt->bindParam(':date',$mgo_date);
$stmt->bindParam(':feedback_type',$mgo_feedback_type);
$stmt->bindParam(':subject',$mgo_subject);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_reviews($start='0',$limit='1000'){
$q='select * from reviews limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function reviews_constants(){$const=array('review_id','student_name','comment','date','feedback_type','subject');

 return $const;
}
 
 
public function update_reviews($mgo_student_name,$mgo_comment,$mgo_date,$mgo_feedback_type,$mgo_subject){
 
$q='update reviews set student_name=:student_name,comment=:comment,date=:date,feedback_type=:feedback_type,subject=:subject where review_id=:9021_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':student_name',$mgo_student_name);
$stmt->bindParam(':comment',$mgo_comment);
$stmt->bindParam(':date',$mgo_date);
$stmt->bindParam(':feedback_type',$mgo_feedback_type);
$stmt->bindParam(':subject',$mgo_subject);
$stmt->bindParam(':9021_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_reviews(){
$q='delete from reviews where review_id=:9021_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9021_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_reviews($col,$value,$start='0',$limit='1000'){
$q='select * from reviews where '.$col.' like :col limit'.' '.$start.','.$limit;
 $value='%'.$value.'%'; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function search_marched_reviews($col,$value,$start='0',$limit='1000'){
$q='select * from reviews where '.$col.'=:col limit'.' '.$start.','.$limit; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function get_reviews($id){
$q='select * from reviews where review_id=:9021_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9021_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 

 } 
 
  ?>