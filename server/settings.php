<?php


function geturl() {
	return "http://54.243.207.123/";
}
function getfilepath() {
	return "/var/www";
}

function is_connected()
{
    $connected = @fsockopen("www.usa.gov", [80|443]); //website and port
    if ($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
    }
    return $is_conn;

}
