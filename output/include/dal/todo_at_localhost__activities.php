<?php
$dalTableactivities = array();
$dalTableactivities["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableactivities["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTableactivities["status"] = array("type"=>16,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTableactivities["priority"] = array("type"=>16,"varname"=>"priority", "name" => "priority", "autoInc" => "0");
$dalTableactivities["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableactivities["id"]["key"]=true;

$dal_info["todo_at_localhost__activities"] = &$dalTableactivities;
?>