<?php

 include_once('autoload.php'); 

 class course_events{

  
 var $primary_key; 
 function __construct($event_id=''){ 
 $this->primary_key=$event_id;
}

public function create_course_events($mgo_teacher_name,$mgo_event_title,$mgo_event_description,$mgo_date_created,$mgo_school){
$q='insert into course_events(teacher_name,event_title,event_description,date_created,school) values(:teacher_name,:event_title,:event_description,:date_created,:school)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':teacher_name',$mgo_teacher_name);
$stmt->bindParam(':event_title',$mgo_event_title);
$stmt->bindParam(':event_description',$mgo_event_description);
$stmt->bindParam(':date_created',$mgo_date_created);
$stmt->bindParam(':school',$mgo_school);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_course_events($start='0',$limit='1000'){
$q='select * from course_events limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function course_events_constants(){$const=array('event_id','teacher_name','event_title','event_description','date_created','school');

 return $const;
}
 
 
public function update_course_events($mgo_teacher_name,$mgo_event_title,$mgo_event_description,$mgo_date_created,$mgo_school){
 
$q='update course_events set teacher_name=:teacher_name,event_title=:event_title,event_description=:event_description,date_created=:date_created,school=:school where event_id=:4571_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':teacher_name',$mgo_teacher_name);
$stmt->bindParam(':event_title',$mgo_event_title);
$stmt->bindParam(':event_description',$mgo_event_description);
$stmt->bindParam(':date_created',$mgo_date_created);
$stmt->bindParam(':school',$mgo_school);
$stmt->bindParam(':4571_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_course_events(){
$q='delete from course_events where event_id=:4571_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4571_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_course_events($col,$value,$start='0',$limit='1000'){
$q='select * from course_events where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function search_marched_course_events($col,$value,$start='0',$limit='1000'){
$q='select * from course_events where '.$col.'=:col limit'.' '.$start.','.$limit; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function get_course_events($id){
$q='select * from course_events where event_id=:4571_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4571_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 

 } 
 
  ?>