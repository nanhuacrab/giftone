<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2015 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class admin_job_class_mapping_controller extends common
{
	function index_action(){
		$from_type = 1;
		
		if ( $_GET['t'] ) {
			$from_type = $_GET['t'];
		}
		
		if ( $from_type == 1 ) {
			$from_type_name = "58同城";
		}else if ( $from_type == 2 ) {
			$from_type_name = "51job";
		}
	
		$list=$this->obj->DB_select_all("job_class_mapping","`from_type` = ".$from_type);
		include(PLUS_PATH."job.cache.php");
		$this->yunset("job_index",$job_index);
		$this->yunset("job_name",$job_name);
		$this->yunset("list",$list);
		$this->yunset("from_type",$from_type);
		$this->yunset("from_type_name",$from_type_name);
		$this->yuntpl(array('admin/admin_job_class_mapping'));
		$this->cache_action();
	}
	
	function getsubjob_action(){
		$jobid = $_GET['jobid'];
		include(PLUS_PATH."job.cache.php");
		$this->yunset("job_index",$job_type[$jobid]);
		$this->yunset("job_name",$job_name);
		$this->yuntpl(array('admin/admin_job_class_mapping_update'));
	}
	
	function add_action(){
		if(!empty($_POST['add_name'])){
			if(!is_array($this->obj->DB_select_once("industry","`name`='".$_POST['add_name']."'"))){
				$add=$this->obj->DB_insert_once("industry","`name`='".$this->stringfilter(trim($_POST["add_name"]))."',`sort`='".$_POST['add_sort']."'");
				$this->cache_action();
			    $add?$msg=3:$msg=4;
			    $this->obj->admin_log("行业类别(ID:".$add.")添加成功！");
			}else{
				$msg=2;
			}
		}else{
			$msg=1;
		}
		echo $msg;die;
	}
	
	function upp_action(){
		if($_POST['mappingid']){
			include(PLUS_PATH."job.cache.php");
			$sql = "`job1`='".$_POST['job1']."',`job1_son`='".$_POST['job1_son']."',`job1_name` = '".$job_name[$_POST['job1']]."', `job1_son_name` = '".$job_name[$_POST['job1_son']]."',`job_class_id` = '".$_POST['job_class']."', `job_class_name` = '".$job_name[$_POST['job_class']]."'";
			$where = "`id`='".$_POST['mappingid']."'";
			$up=$this->obj->DB_update_all("job_class_mapping",$sql,$where);
			$this->cache_action();
			//echo $up." ".$sql." where ".$where; die;
		}
	}
	
	function del_action()
	{
		if((int)$_GET['delid'])
		{
			$this->check_token();
			$id=$this->obj->DB_delete_all("industry","`id`='".$_GET['delid']."'");
			$this->cache_action();
			$id?$this->layer_msg('行业类别(ID:'.$_GET['delid'].')删除成功！',9,0,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,0,$_SERVER['HTTP_REFERER']);
		}
		if($_POST['del'])
		{
			$del=@implode(",",$_POST['del']);
			$id=$this->obj->DB_delete_all("industry","`id` in (".$del.")","");
			$this->cache_action();
			isset($id)?$this->layer_msg('行业类别(ID:'.$del.')删除成功！',9,1,$_SERVER['HTTP_REFERER']):$this->layer_msg('删除失败！',8,1,$_SERVER['HTTP_REFERER']);
		}
		$this->yuntpl(array('admin/admin_industry'));
	}
	function cache_action()
	{
		include(LIB_PATH."cache.class.php");
		$cacheclass= new cache("../plus/",$this->obj);
		$makecache=$cacheclass->admin_job_class_mapping_cache("job_class_mapping.cache.php");
	}
	function ajax_action(){
		if($_POST['sort']){
			$this->obj->DB_update_all("industry","`sort`='".$_POST['sort']."'","`id`='".$_POST['id']."'");
			$this->obj->admin_log("行业类别(ID:".$_POST['id'].")修改排序！");
		}
		if($_POST['name']){
			$_POST['name']=$this->stringfilter($_POST['name']);
			$this->obj->DB_update_all("industry","`name`='".$_POST['name']."'","`id`='".$_POST['id']."'");
			$this->obj->admin_log("行业类别(ID:".$_POST['id'].")修改类别名称！");
		}
		$this->cache_action();
		echo '1';die;
	}
	
	function job1_action() {
		if ( $_GET['job1'] ) {
			include(PLUS_PATH."job.cache.php");
			$this->yunset("job1",$_GET['job1']);
			$job1_son = $_GET['job1_son'];
			if ( $job1_son ) {
				$this->yunset("job1_son",$job1_son);
			} else {
				$job1_son = $job_type[$_GET['job1']][0];
				$this->yunset("job1_son",$job1_son);
			}
			
			if ( $_GET['job_class'] ) {
				$this->yunset("job_class",$_GET['job_class']);
			} else {
				$this->yunset("job_class",$job_type[$job1_son][0]);
			}
			
			$this->yunset("job_index",$job_index);
			$this->yunset("job_type",$job_type);
			$this->yunset("job_name",$job_name);
			$this->yuntpl(array('admin/admin_job_class_mapping_job1'));
		}
	}
}
?>