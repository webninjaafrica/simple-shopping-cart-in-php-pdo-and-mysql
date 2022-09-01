<?php

 include_once('autoload.php'); 

 class users{

  
 var $primary_key; 
 function __construct($user_id=''){ 
 $this->primary_key=$user_id;
}

public function create_users($mgo_username,$mgo_password,$mgo_full_names,$mgo_course,$mgo_school,$mgo_date_registered,$mgo_user_type){
$q='insert into users(username,password,full_names,course,school,date_registered,user_type) values(:username,:password,:full_names,:course,:school,:date_registered,:user_type)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':username',$mgo_username);
$stmt->bindParam(':password',$mgo_password);
$stmt->bindParam(':full_names',$mgo_full_names);
$stmt->bindParam(':course',$mgo_course);
$stmt->bindParam(':school',$mgo_school);
$stmt->bindParam(':date_registered',$mgo_date_registered);
$stmt->bindParam(':user_type',$mgo_user_type);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_users($start='0',$limit='1000'){
$q='select * from users limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function users_constants(){$const=array('user_id','username','password','full_names','course','school','date_registered','user_type');

 return $const;
}
 
 
public function update_users($mgo_username,$mgo_password,$mgo_full_names,$mgo_course,$mgo_school,$mgo_date_registered,$mgo_user_type){
 
$q='update users set username=:username,password=:password,full_names=:full_names,course=:course,school=:school,date_registered=:date_registered,user_type=:user_type where user_id=:9021_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':username',$mgo_username);
$stmt->bindParam(':password',$mgo_password);
$stmt->bindParam(':full_names',$mgo_full_names);
$stmt->bindParam(':course',$mgo_course);
$stmt->bindParam(':school',$mgo_school);
$stmt->bindParam(':date_registered',$mgo_date_registered);
$stmt->bindParam(':user_type',$mgo_user_type);
$stmt->bindParam(':9021_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_users(){
$q='delete from users where user_id=:9021_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9021_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_users($col,$value,$start='0',$limit='1000'){
$q='select * from users where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function search_marched_users($col,$value,$start='0',$limit='1000'){
$q='select * from users where '.$col.'=:col limit'.' '.$start.','.$limit; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function get_users($id){
$q='select * from users where user_id=:9021_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9021_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function login_users($username,$password){ 
$q='select * from users where username=:username and password=:password';
 $data=array();

 $stmt=DB::connect()->prepare($q); 
$stmt->bindParam(':username',$username); 
$stmt->bindParam(':password',$password); 

 $stmt->execute(); 
 $data['rows']=$stmt->fetch(PDO::FETCH_ASSOC); 
 $data['row_count']=$stmt->rowCount(); 
 return $data; 
 } 
 

 } 
 
  ?>