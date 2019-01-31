<?php

//EVERYTHING HERE:
include_once("../files/hackerdb_connection.php");
$status = "";
//SQL CONNECTION

$ip = $_SERVER["REMOTE_ADDR"];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
/* ip, hostname, loc, org, city, region, country, phone */
$hostname = $details->hostname;
$loc = $details->loc;
$city = $details->city;
$org = $details->org;
$region= $details->region;
$postal= $details->postal;

$sql = mysqli_query($connection, "INSERT INTO ip_table (ip_address, hostname, location, city, organization, region, postal) VALUES ('$ip','$hostname','$loc','$city','$org','$region',$postal)");

if(!$sql){
	$status = "<br>Connection to database failed. " . mysqli_error($connection);
}else{

}

$ip = $_SERVER["REMOTE_ADDR"];
$json = file_get_contents("https://api.coindesk.com/v1/bpi/currentprice.json");
$coindesk = json_decode($json);
$updated = $coindesk->time->updated;
$updatediso = $coindesk->time->updatedISO;
$disclaimer = $coindesk->disclaimer;
$chartName = $coindesk->chartName;
$code = $coindesk->bpi->USD->code;
$symbol = $coindesk->bpi->USD->symbol;
$rate = $coindesk->bpi->USD->rate;
$description = $coindesk->bpi->USD->description;

function get_ip_address() {

	// check for shared internet/ISP IP

	if (!empty($_SERVER['HTTP_CLIENT_IP']) && $this->validate_ip($_SERVER['HTTP_CLIENT_IP'])){
		return $_SERVER['HTTP_CLIENT_IP'];
	}

	// check for IPs passing through proxies

	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

		// check if multiple ips exist in var

		$iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
		foreach ($iplist as $ip) {
			if ($this->validate_ip($ip)){
				return $ip;
			}
		}
	}

	if (!empty($_SERVER['HTTP_X_FORWARDED']) && $this->validate_ip($_SERVER['HTTP_X_FORWARDED'])){
		return $_SERVER['HTTP_X_FORWARDED'];
	}

	if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && $this->validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])){
		return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
	}
	
	if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && $this->validate_ip($_SERVER['HTTP_FORWARDED_FOR'])){
		return $_SERVER['HTTP_FORWARDED_FOR'];
	}
		

	if (!empty($_SERVER['HTTP_FORWARDED']) && $this->validate_ip($_SERVER['HTTP_FORWARDED'])){
		return $_SERVER['HTTP_FORWARDED'];
	}

	// return unreliable ip since all else failed
	return $_SERVER['REMOTE_ADDR'];
}

function validate_ip($ip) {
	if (filter_var($ip, FILTER_VALIDATE_IP, 
	FILTER_FLAG_IPV4 | 
	FILTER_FLAG_IPV6 |
	FILTER_FLAG_NO_PRIV_RANGE | 
	FILTER_FLAG_NO_RES_RANGE) === false)
	return false;
	self::$ip = $ip;
	return true;
}

 ?>