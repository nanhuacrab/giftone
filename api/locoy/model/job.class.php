<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2015 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class job_controller extends common{
	function add_action(){
	
		include("api_helper.php");
		include("locoy_config.php");
		if($locoyinfo['locoy_online']!=1){
			echo 4;die;
		}
		if($locoyinfo['locoy_key']!=trim($_GET['key'])){
			echo 5;die;
		}
        if(!$_POST['job_name'] || !$_POST['com_name']){
			echo 2;die;
		}
		$uid=$this->add_com($_POST,$locoyinfo);
		$this->add_job($_POST,$locoyinfo,$uid);
	}
	function add_job($p,$l,$uid){
		$data['uid']=$uid;
		$data['name']=$p['job_name'];
		$data['page_url']=$p['page_url'];
		$data['recurit_level_type']=$p['recurit_level_type'];
		$data['lastupdate']=mktime();
		$data['state']=$l['locoy_job_status'];
		$data['add_by_who'] = $p['add_by_who'];
		$data['jobhits'] = rand(15,35);
		$data['description'] = str_replace(array("&amp;","background-color:#ffffff","background-color:#fff"),array("&",'',''),html_entity_decode($p['description'],ENT_NOQUOTES,"GB2312"));
		include(PLUS_PATH."industry.cache.php");
		$hy=$p['job_hy']?$p['job_hy']:$p['hy'];
		//$data['hy']=$this->locoytostr($industry_name,$hy,$l['locoy_rate']);
		$data['hy']=$this->locoytohy($industry_name,$hy,$l['locoy_rate']);
		if(!$data['hy']){
			$data['hy']=$l['locoy_job_hy'];
		}
		//$job_row=$this->get_job_class($p['job_cate'],$l['locoy_rate']);
		$data['test_remark'] = $p['job_cate'];
		$job_row=$this->get_job_class_mapping(1,$p['job_cate'],$l['locoy_rate']); // 58同城
			if($job_row){
				$i=1;
				foreach($job_row as $v){
					if($i==1)$data['job1']=$v;
					if($i==2)$data['job1_son']=$v;
					if($i==3)$data['job_post']=$v;
					$i++;
				}
			}else{
				$data['job1']=$l['locoy_job_job1'];
				$data['job1_son']=$l['locoy_job1_son'];
				$data['job_post']=$l['locoy_job_post'];
			}
		
		$city=$p['job_city']?$p['job_city']:$p['city'];
		$city_row=$this->get_city($city,$l['locoy_rate']);
			if($city_row){
				$i=1;
				foreach($city_row as $v){
					if($i==1)$data['provinceid']=$v;
					if($i==2)$data['cityid']=$v;
					if($i==3)$data['three_cityid']=$v;
					$i++;
				}
			}else{
				$data['provinceid']=$l['locoy_job_province'];
				$data['cityid']=$l['locoy_job_city'];
				$data['three_cityid']=$l['locoy_job_three'];
			}
		if($p['sdate']){
			$data['sdate']=strtotime($p['sdate']);
		}else{
			$data['sdate']=strtotime($l['locoy_job_sdate']);
		}
		if($p['edate']){
			$data['edate']=strtotime($p['edate']);
		}else{
			$data['edate']=strtotime($l['locoy_job_edate']);
		}
		//$data['salary']=$this->locoytostr($this->get_com_type('salary'),$p['salary'],$l['locoy_rate']);
		$data['salary']=$this->locoytosalary($this->get_com_type('salary'),$p['salary'],$l['locoy_rate']);
		if(!$data['salary']){
			$data['salary']=$l['locoy_job_salary'];
		}
		//$data['exp']=$this->locoytostr($this->get_com_type('exp'),$p['exp'],$l['locoy_rate']);
		$data['exp']=$this->locoytoexp($this->get_com_type('exp'),$p['exp'],$l['locoy_rate']);
		if(!$data['exp']){
			$data['exp']=$l['locoy_job_exp'];
		}
		$data['report']=$this->locoytostr($this->get_com_type('report'),$p['report'],$l['locoy_rate']);
		if(!$data['report']){
			$data['report']=$l['locoy_job_report'];
		}
		$data['age']=$this->locoytostr($this->get_com_type('age'),$p['age'],$l['locoy_rate']);
		if(!$data['age']){
			$data['age']=$l['locoy_job_age'];
		}
		$data['type']=$this->locoytostr($this->get_com_type('type'),$p['type'],$l['locoy_rate']);
		if(!$data['type']){
			$data['type']=$l['locoy_job_type'];
		}
		$data['sex']=$this->locoytostr($this->get_com_type('sex'),$p['sex'],$l['locoy_rate']);
		if(!$data['sex']){
			$data['sex']=$l['locoy_job_sex'];
		}
		$data['edu']=$this->locoytostr($this->get_com_type('edu'),$p['edu'],$l['locoy_rate']);
		if(!$data['edu']){
			$data['edu']=$l['locoy_job_edu'];
		}
		$data['marriage']=$this->locoytostr($this->get_com_type('marriage'),$p['marriage'],$l['locoy_rate']);
		if(!$data['marriage']){
			$data['marriage']=$l['locoy_job_marriage'];
		}
		$data['number']=$this->locoytostr($this->get_com_type('number'),$p['number'],$l['locoy_rate']);
		if(!$data['number']){
			$data['number']=$l['locoy_job_number'];
		}
		$data['xuanshang']='0';
		$com=$this->obj->DB_select_once("company","`uid`='".$uid."'");
		$data['com_name']=$com['name'];
		$data['com_logo']=$com['logo'];
		$data['com_provinceid']=$com['provinceid'];
		$data['pr']=$com['pr'];
		$data['mun']=$com['mun'];
		$data['rating']=$satic['rating'];
		$nid=$this->obj->insert_into("company_job",$data);
		if($this->config['com_job_status']=="1"){
			$this->send_dingyue($nid,2);
		}
		$this->obj->DB_update_all("company_statis",$sql,"`uid`='".$uid."'");
		$this->obj->DB_update_all("company","`jobtime`='".$p['lastupdate']."'","`uid`='".$uid."'");
	}

	function add_com($p,$l){
	
		if ( $p['comp_url_58'] ) {
			$api_helper = new api_helper( );
			$api_helper->getcontent( $p['comp_url_58'] );
			$p['email'] = $api_helper->getemail( );
			$p['mobile'] = $api_helper->getphone( );
			$p['linkphone'] = $p['mobile'];
		}
	
		$row=$this->obj->DB_select_once("company","`name`='".$p['com_name']."'");
		if(is_array($row)){
			return $row['uid'];
		}else{
			$userid=$this->add_user($p,$l);
			$where['uid']=$userid;
			$data['name']=trim($p['com_name']);
			$data['address']=trim($p['address']);
			$data['linkphone']=trim($p['linkphone']);
			$data['linkmail']=trim($p['email']);
			$data['zip']=trim($p['zip']);
			$data['linkman']=trim($p['linkman']);
			$data['linkjob']=trim($p['linkjob']);
			$data['linkqq']=trim($p['linkqq']);
			if ( $p['moblie'] ){
				$data['linktel']=trim($p['moblie']);
			}else {
				$data['linktel']=$data['linkphone'];
			}
			
			$data['website']=trim($p['website']);
			if($p['com_sdate']){
				$data['sdate']=date("Y-m-d",strtotime(trim($p['com_sdate'])));
			}
			$money=str_replace(array("元","美元","￥","$"),"",trim($p['money']));
			if(!$money)$money=$l['locoy_com_money'];
			$data['money']=$money;
			$data['content'] = str_replace(array("&amp;","background-color:#ffffff","background-color:#fff"),array("&",'',''),html_entity_decode($p['com_content'],ENT_NOQUOTES,"GB2312"));
			$data['lastupdate']=mktime();
			
			include(PLUS_PATH."industry.cache.php");
			//$data['hy']=$this->locoytostr($industry_name,$p['hy'],$l['locoy_rate']);
			$data['hy']=$this->locoytohy($industry_name,$p['hy'],$l['locoy_rate']);
			if(!$data['hy']){
				$data['hy']=$l['locoy_com_hy'];
			}
			//$data['pr']=$this->locoytostr($this->get_com_type('pr'),$p['pr'],$l['locoy_rate']);
			$data['pr']=$this->locoytopr($this->get_com_type('pr'),$p['pr'],$l['locoy_rate']);
			if(!$data['pr']){
				$data['pr']=$l['locoy_com_pr'];
			}
			//$data['mun']=$this->locoytostr($this->get_com_type('mun'),$p['mun'],$l['locoy_rate']);
			$data['mun']=$this->locoytomun($this->get_com_type('mun'),$p['mun'],$l['locoy_rate']);
			if(!$data['mun']){
				$data['mun']=$l['locoy_com_mun'];
			}
			$city_row=$this->get_city($p['city'],$l['locoy_rate']);
			if($city_row){
				$i=1;
				foreach($city_row as $v){
					if($i==1)$data['provinceid']=$v;
					if($i==2)$data['cityid']=$v;
					$i++;
				}
			}else{
				$data['provinceid']=$l['locoy_com_province'];
				$data['cityid']=$l['locoy_com_city'];
			}
			$nid=$this->obj->update_once("company",$data,$where);
			return $userid;
		}
	}
	function add_user($p,$l){
		$salt = substr(uniqid(rand()),-6);
		$pass = md5(md5($l['locoy_pwd']).$salt);
		$ip = $this->obj->fun_ip_get();
		$time = time();
		$username=$this->get_username($l);
		if($l['locoy_user_status']==1){
			$satus=1;
		}
		$userid=$this->obj->DB_insert_once("member","`username`='".$username."',`password`='$pass',`moblie`='".$p['moblie']."',`email`='".$p['email']."',`usertype`='2',`status`='$satus',`salt`='$salt',`reg_date`='$time',`reg_ip`='$ip'");
		$value="`uid`='$userid',".$this->rating_info($l['locoy_rating']);
		$value2 = "`uid`='$userid',`linkmail`='".$p['email']."',`name`='".$p['com_name']."',`linktel`='".$p['moblie']."',`address`='".$_POST['address']."'";
		$this->obj->DB_insert_once("company_statis",$value);
		$this->obj->DB_insert_once("company",$value2);
		$this->obj->DB_insert_once("friend_info","`uid`='".$userid."',`nickname`='".$username."',`usertype`='2'");
		return $userid;
	}
	function get_username($l){
		$row = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9");
		$va="";
		for($i=0;$i<$l['locoy_length'];$i++){
			$rand=rand(0,61);
			$va.=$row[$rand];
		}
		$data=$l['locoy_name'].$va;
		return $data;
	}
	function rating_info($id)
	{
		$id =$this->config['com_rating'];
		$row = $this->obj->DB_select_once("company_rating","`id`='".$id."'");
		$value="`rating`='$id',";
		$value.="`integral`='".$this->config['integral_reg']."',";
		$value.="`rating_name`='".$row["name"]."',";
		if($row['type']==1){
			$value.="`job_num`='".$row["job_num"]."',";
			$value.="`down_resume`='".$row["resume"]."',";
			$value.="`invite_resume`='".$row["interview"]."',";
			$value.="`editjob_num`='".$row["editjob_num"]."',";
			$value.="`breakjob_num`='".$row["breakjob_num"]."'";
		}else{
			$time=time()+86400*$row['service_time'];
			$value.="`vip_etime`='".$time."'";
		}
		return $value;
	}
	function get_city($name,$locoy_rate){
		include(PLUS_PATH."city.cache.php");
		$name=str_replace(array("省","市","县","区"),"/",$name);
		$arr=explode("/",$name);
		if ( count($arr) > 2 ) {
			$arr = array($arr[0],$arr[1]);
		}
		
		if ( count($arr) > 1 ) {
			if( $arr[1] == "申请职位" ) {
				$arr = array($arr[0]);
			}
			else if( trim($arr[1]) == "浦东" ) {
				$arr[1] = "浦东新";
			}
		}
		
		if(is_array($arr)){
			foreach($arr as $v){
				$data[]=$this->locoytostr($city_name,$v,$locoy_rate);
			}
		}
		$city_type[0]=$city_index;
		$val=$this->get_all_city($city_type,$data);
		if(count($val)==1){
			$val[]=$this->get_once_city($city_type,$city_name,$val[0],$locoy_rate);
		}
		return $val;
	}
	function get_job_class_mapping($from_type,$name,$locoy_rate){
		include(PLUS_PATH."job_class_mapping.cache.php");
		
		$index = strpos( $name, "（招" );
		if (false !== $index) {
			$name = substr($name, 0, $index);
		}
		
		$index = strpos( $name, "(招" );
		if (false !== $index) {
			$name = substr($name, 0, $index);
		}
		
		$index = strpos( $name, "@" );
		if (false !== $index) {
			$name = substr($name, 0, $index);
		}
		
		
		$key = $from_type."_".$name;
		$mapping = $job_class_mapping[$key];
		if( isset($mapping) ){
			return array( $mapping[4], $mapping[2], $mapping[0] );
		}
		else {
			return null;
		}
	}
	function get_job_class($name,$locoy_rate){
		include(PLUS_PATH."job.cache.php");
		$arr=explode("/",$name);
		if(is_array($arr)){
			foreach($arr as $v){
				$data[]=$this->locoytostr($job_name,$v,$locoy_rate);
			}
		}
		$job_type[0]=$job_index;
		$val=$this->get_all_city($job_type,$data,$locoy_rate);
		if(count($val)==1){
			$val[]=$this->get_once_city($job_type,$job_name,$val[0],$locoy_rate);
		}
		return $val;
	}
	function get_all_city($city_type,$data,$locoy_rate,$k=""){
		if(is_array($data)){
			foreach($data as $v){
				foreach($city_type as $key=>$value){
					$a=$k?$k:$v;
					if(in_array($a,$value)){
						if($key){
							$val=$this->get_all_city($city_type,$data,$locoy_rate,$key);
						}
						$val[$key]=$a;
					}
				}
			}
		}
		return $val;
	}
	function get_once_city($t,$n,$id,$locoy_rate){
		$row=$n[$id];
		if(is_array($t[$id])){
			foreach($t[$id] as $k=>$v){
				$array[$v]=$n[$v];
			}
		}
		$r=$this->locoytostr($array,$row,$locoy_rate);
		return $r;
	}
	function get_com_type($cat){
		include(PLUS_PATH."com.cache.php");
		foreach($comdata["job_".$cat] as $v){
			$data[$v]=$comclass_name[$v];
		}
		return $data;
	}
	function locoytomun($arr,$str,$locoy_rate="50"){
		$index = strpos( $str, "人" );
		if (false !== $index) {
			$str = substr($str, 0, $index);
		}
		$str = explode( "-", $str );
		if (1 < count( $str )) {
			$str = $str [1];
		} else {
			$str = $str [0];
		}
		if ( $str < "10" ){ return '27'; }
		else if ( $str < "50" ) { return '28'; }
		else if ( $str < "200" ) { return '29'; }
		else if ( $str < "500" ) { return '30'; }
		else if ( $str < "1000" ) { return '31'; }
		else if ( $str >= "1000" ) { return '32'; }
		else { return ""; }
	}
	function locoytosalary($arr,$str,$locoy_rate="50"){
		$str = explode( "-", $str );
		if (1 < count( $str )) {
			$str = $str [1];
		} else {
			$str = $str [0];
		}
		if ( $str == "不限" ) { return "128"; }
		else if ( $str == "面议" ) { return "46"; }
		
		$str = $str - 1;
		if ( $str <= "1000" ) { return "47"; }
		else if ( $str >= "50000" ) { return "132"; }
		else if ( $str >= "30000" ) { return "131"; }
		else if ( $str >= "20000" ) { return "130"; }
		else if ( $str >= "15000" ) { return "129"; }
		else if ( $str >= "10000" ) { return "53"; }
		else if ( $str >= "8000" ) { return "52"; }
		else if ( $str >= "6000" ) { return "51"; }
		else if ( $str >= "4500" ) { return "50"; }
		else if ( $str >= "3000" ) { return "49"; }
		else if ( $str >= "2000" ) { return "83"; }
		else if ( $str >= "1000" ) { return "48"; }
		else { return "面议"; }
	}
	function locoytoexp($arr,$str,$locoy_rate="50"){
		$index = strpos( $str, "年" );
		if (false !== $index) {
			$str = substr( $str, 0, $index );
		}
		$str = explode( "-", $str );
		if (1 < count( $str )) {
			$str = $str [1];
		} else {
			$str = $str [0];
		}
		
		if (false !== strpos( $str, "不限" )) { return "127"; }
		
		else if ( false !== strpos( $str, "应届毕业生" ) || false !== strpos( $str, "毕业生" ) || false !== strpos( $str, "应届" ) ) { return "12"; }
		
		else if ( $str > "10" ) { return "18"; } // 10年以上
		else if ( $str > "8" ) { return "17"; } // 8年以上
		else if ( $str > "5" ) { return "16"; } // 5年以上
		else if ( $str > "3" ) { return "15"; } // 3年以上
		else if ( $str > "2" ) { return "14"; } // 2年以上
		else if ( $str > "1" ) { return "13"; } // 1年以上
		else if ( $str > "0" ) { return "12"; } // 应届毕业生
		else { return "127"; }
		
	}
	function locoytopr( $arr, $str, $locoy_rate = "50" ) {
		if ( false !== strpos( $str, "外" ) ) {
			return '20'; // 外资企业
		}
		if ( false !== strpos( $str, "私" ) ) {
			return '22'; // 私营企业
		}
		if ( false !== strpos( $str, "民" ) ) {
			return '23'; // 民营企业
		}
		if ( false !== strpos( $str, "股" ) ) {
			return '24'; // 股份制企业
		}
		if ( false !== strpos( $str, "市" ) ) {
			return '79'; // 上市公司
		}
		if ( false !== strpos( $str, "国" ) ) {
			return '80'; // 国家机关
		}
		
		$index = strpos( $str, "事" );
		if (0 <= $index) {
			return '81'; // 事业单位
		}
		
		if ( false !== strpos( $str, "集" ) ) {
			return '25'; // 集体企业
		}
		
		if ( false !== strpos( $str, "合" ) ) {
			return '21'; // 合资企业
		}
		
		return "82"; // 其他
	}
	function locoytohy( $arr,$str,$locoy_rate="50") {
		if (false !== strpos( $str, "计算机" ) || false !== strpos( $str, "互联网" )) {
			return "35";
		}
		if (false !== strpos( $str, "机械" ) || false !== strpos( $str, "设备" ) || false !== strpos( $str, "技工" )) {
			return "837";
		}
		if (false !== strpos( $str, "贸易" ) || false !== strpos( $str, "百货" )) {
			return "835";
		}
		if (false !== strpos( $str, "化工" ) || false !== strpos( $str, "能源" )) {
			return "836";
		}
		if (false !== strpos( $str, "公务员" ) || false !== strpos( $str, "翻译" ) || false !== strpos( $str, "其他" )) {
			return "45";
		}
		if (false !== strpos( $str, "服务" )) {
			return "44";
		}
		if (false !== strpos( $str, "咨询" ) || false !== strpos( $str, "法律" ) || false !== strpos( $str, "教育" ) || false !== strpos( $str, "科研" )) {
			return "43";
		}
		if (false !== strpos( $str, "人事" ) || false !== strpos( $str, "行政" ) || false !== strpos( $str, "高级管理" )) {
			return "42";
		}
		if (false !== strpos( $str, "建筑" ) || false !== strpos( $str, "房地产" )) {
			return "41";
		}
		if (false !== strpos( $str, "广告" ) || false !== strpos( $str, "市场" ) || false !== strpos( $str, "媒体" ) || false !== strpos( $str, "艺术" )) {
			return "40";
		}
		if (false !== strpos( $str, "生物" ) || false !== strpos( $str, "制药" ) || false !== strpos( $str, "医疗" ) || false !== strpos( $str, "护理" )) {
			return "39";
		}
		if (false !== strpos( $str, "生产" ) || false !== strpos( $str, "营运" ) || false !== strpos( $str, "采购" ) || false !== strpos( $str, "物流" )) {
			return "38";
		}
		if (false !== strpos( $str, "会计" ) || false !== strpos( $str, "金融" ) || false !== strpos( $str, "银行" ) || false !== strpos( $str, "保险" )) {
			return "37";
		}
		if (false !== strpos( $str, "销售" ) || false !== strpos( $str, "客服" ) || false !== strpos( $str, "技术支持" ) || false !== strpos( $str, "批发" ) || false !== strpos( $str, "零售" ) ) {
			return "36";
		}
		if (false !== strpos( $str, "通信" ) || false !== strpos( $str, "电子" ) ) {
			return "839";
		}
		return "44"; // 服务
	}
	function locoytostr($arr,$str,$locoy_rate="50"){
		foreach($arr as $key=>$value)
		{
			similar_text($str,$value,$percent);
			
			$rows[$percent]=$key;
			$aaa[$percent] = $value;
		}
		krsort($rows);
		foreach($rows as $k =>$v){			 
			if ($k>=$locoy_rate){
				return $v;
			}else{
				return false;
			}
		}
	}
	function tostring($string){ 
		$length=strlen($string); 
		$retstr=''; 
		for($i=0;$i<$length;$i++) { 
			$retstr[]=ord($string[$i])>127?$string[$i].$string[++$i]:$string[$i]; 
		} 
		return $retstr; 
	}
	function getjobclasses_action(){
		echo "<table>";
		$this->getjobclasses(0,"");
		echo "</table>";
	}
	
	function getjobclasses($pid,$phtml){
		$rows=$this->obj->DB_select_all("job_class","`keyid`=".$pid."");
		foreach( $rows as $row ){
			echo "<tr>";
			$h = "<tr>";
			//echo $phtml;
			$p = $phtml."<td>".$row['id']."</td>"."<td>".$row['name']."</td>";
			//echo "<td>".$row['keyid']."</td>";
			echo $p;
			$h .= $p;
			echo "</tr>";
			$h .= "</tr>";
			if ( false === $this->getjobclasses($row['id'],$p) ){
			//	echo $h;
			}
		}
		if( 0 < count($rows) ){
			return true;
		}else {
			return false;
		}
	}
}
?>