<?php
class api_helper {
    function getcontent( $company_url ) {
        $this->company_url = $company_url;
        $this->company_url = "http://qy.m.58.com/m_detail/" . substr( $company_url, 17 );
        
        $options = array (
                'http' => array (
                        'method' => 'GET' 
                ) 
        );
        $this->content = stream_context_create( $options );
        $this->content = file_get_contents( $this->company_url, false, $this->content );
    }
    function getphone( ) {
        $regex = '/<a href="tel:(?<phone>[0-9]*)">/i';
        $matches = array ();
        if (preg_match( $regex, $this->content, $matches )) {
            return $matches [1];
        }
    }
    function getemail( ) {
        $regex = '/<dt>电子邮箱：<\/dt>[^<]*<dd>(?<email>[^<]*)<\/dd>/i';
        $matches = array ();
        if (preg_match( $regex, $this->content, $matches )) {
            return $matches [1];
        }
    }
}

if ($_GET ["test"]) {
    $api_helper = new api_helper( );
    $api_helper->getcontent( "http://qy.58.com/26862159811078/" );
    echo $api_helper->company_url . "<br />";
    // echo $api_helper->content . "<br />";
    
    echo $api_helper->getphone( ) . "<br />";
    echo $api_helper->getemail( ) . "<br />";
}

?>