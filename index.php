<?php
include('UserInformation.php');

echo "Your Ip address: ". UserInfo::get_ip();
echo"<br><br>";
echo "Your OS: ".UserInfo::get_os();
echo"<br><br>";
echo "Your Browser: ".UserInfo::get_browser();
echo"<br><br>";
echo "Your Device: ".UserInfo::get_device();
?>