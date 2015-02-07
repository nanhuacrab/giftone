<?php

class nanhuacrab_controller extends common{
	
	function fix_action(){
		include("locoy_config.php");
		if($locoyinfo['locoy_online']!=1){
			echo 4;die;
		}
		if($locoyinfo['locoy_key']!=trim($_GET['key'])){
			echo 5;die;
		}
		if(!$_GET['id']){
			echo 2;die;
		}
		
		$id = $_GET['id'];
		$row=$this->obj->DB_select_once("company_job","`id`='".$id."'");
		if(is_array($row)){
			echo $row['test_remark'];
			
			include(PLUS_PATH."city.cache.php");
			
			$arr=explode("/",$name);
			$city = $arr[1];
			$province = $arr[0];
			
			foreach( $city_name as $city ) {
			}
			
		}else{
			echo "no data";die;
		}
	}
	
}

?>