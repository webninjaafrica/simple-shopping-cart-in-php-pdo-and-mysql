<?php
 class menu_item{ 
 var $menu_type, $menu; 
 function __construct($menu_type=''){
 $items=array(array('reviews'=>array('create'=>'add-reviews.php','create_name'=>'reviews','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create reviews ','view'=>'all-reviews.php','view_icon'=>'fa fa-list','view_name'=>'view-reviews','view_permission'=>'allow user to view reviews '));,array('users'=>array('create'=>'add-users.php','create_name'=>'users','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create users ','view'=>'all-users.php','view_icon'=>'fa fa-list','view_name'=>'view-users','view_permission'=>'allow user to view users '));,
 $this->menu_type=$menu_type;
 $this->menu=$items;  
 
 } 
 static function getForDataEntry(){
 $menu=$items=array(array('reviews'=>array('create'=>'add-reviews.php','create_name'=>'reviews','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create reviews ','view'=>'all-reviews.php','view_icon'=>'fa fa-list','view_name'=>'view-reviews','view_permission'=>'allow user to view reviews '));,array('users'=>array('create'=>'add-users.php','create_name'=>'users','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create users ','view'=>'all-users.php','view_icon'=>'fa fa-list','view_name'=>'view-users','view_permission'=>'allow user to view users ')););
 $menus=array(); 
for($i=0; $i<count($menu); $i++){
 $data=json_decode($menu[$i]);
 if($data['type']=='create'){ 
 array_push($data,$menus); 
} 
 }
 return $menus; }
  
 static function getForDataReports(){
 $menu=$items=array(array('reviews'=>array('create'=>'add-reviews.php','create_name'=>'reviews','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create reviews ','view'=>'all-reviews.php','view_icon'=>'fa fa-list','view_name'=>'view-reviews','view_permission'=>'allow user to view reviews '));,array('users'=>array('create'=>'add-users.php','create_name'=>'users','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create users ','view'=>'all-users.php','view_icon'=>'fa fa-list','view_name'=>'view-users','view_permission'=>'allow user to view users ')););
 $menus=array(); 

 return $menu; }
 
 } 
 ?>