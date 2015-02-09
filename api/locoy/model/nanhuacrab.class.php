<?php

class nanhuacrab_controller extends common{
	
	// company original_page_url is null
	function fix2_action(){
		include("locoy_config.php");
		
		if ( $_GET["pn"] ) {
			$pn = $_GET["pn"];
		}else {
			$pn = 0;
		}
		
		if($locoyinfo['locoy_online']!=1){
			echo 4;die;
		}
		if($locoyinfo['locoy_key']!=trim($_GET['key'])){
			echo 5;die;
		}

		echo "fix2";
		//$where = "`original_page_url` IS NULL OR `original_page_url` = '' ORDER BY `uid` DESC LIMIT ".($pn*50).", 50";
		$where = "`original_page_url` IS NULL OR `original_page_url` = '' ORDER BY `uid`";
		$companys=$this->obj->DB_select_all("company",$where);
		
		foreach( $companys as $company ) {
			$uids[] = $company["uid"];
		}
		$where = "`uid` IN ( ".implode(",", $uids)." ) ORDER BY `id`";
		$jobs = $this->obj->DB_select_all("company_job",$where);
		foreach( $jobs as $job ) {
			$jobsDic[$job['uid']] = $job;
		}
		echo "<table><tbody>";
		foreach( $companys as $company ) {
			$uid = $company["uid"];
			$job = $jobsDic[$uid];
			echo "<tr><td class='uid'>".$uid."</td><td><a href='".$job["page_url"]."'>".$job["page_url"]."</a></td></tr>";
		}
		echo "</tbody></table>";
	}
	
	function fix3_action(){
		$job_page_url = $_POST["job_page_url"];
		$company_page_url = $_POST["company_page_url"];
		$this->obj->DB_insert_once("giftone_company", "`job_page_url`='".$job_page_url."', `company_page_url`='".$company_page_url."', uid=0");
	}
	
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