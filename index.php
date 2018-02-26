<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf8" />
  <title>Project WAWA</title>
</head>
<body>
<p><img alt="logo" src="logo.png" height="200" /></p>
<h2>Project WAWA is a real project that we are currently working on and will
be submitted to Hult Prize 2018. We hope that the product of this project could
change the life of over ten million people in Uganda Africa.</h2>
<p><img alt="img1" src="1.png" height="200" width = "300"/></p>
<p><img alt="img2" src="2.png" height="200" width = "300"/></p>
<h3>How It Works?</h3>
<p><img alt="img3" src="how.jpg" height="400"/></p>
<h3>Team members:</h3>
<p><img alt="img4" src="3.png" height="300" width = "400"/></p>
<h4>Gaston Quinones/ Gary Lee / David Sheu <h4>
<p><img alt="img5" src="4.png" height="150" width = "150"/></p>
<h4>Lynn Zheng <h4>
<a href="https://www.facebook.com/groups/628109887579924" target="_blank" class="facebook"a:hover{color:blue},a:visited{color:blue}>Facebook</a>
<p><img alt="Download" src="hult logo.png" height="110" width = "200"/></p>
<h4>Download a copy of our presentation</h4>
<p>
<a href="/WAWA FINAL.pdf">
<img src="pdf.png" alt="Download" width="80" height="80">
</a>
</p>
<p>
<a href="/WAWA FINAL.pptx">
<img src="ppt.png" alt="Download" height="80">
</a>
</p>
<?php
#echo 'Your IP:'." ".getip()." "."\r";
$i = getip();
$details = json_decode(file_get_contents("http://ipinfo.io/{$i}/json"));
#echo 'Your location(Depend on IP):';
#echo $details->city." ";
#echo $details->region." ";
#echo $details->country." ";
#echo 'Your Internet Provider:';
#echo $details->org." ";
#echo 'Your UA:'." ".$_SERVER["HTTP_USER_AGENT"];
function getip() {
if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
$ip = getenv("HTTP_CLIENT_IP");
} else
if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
$ip = getenv("HTTP_X_FORWARDED_FOR");
} else
if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
$ip = getenv("REMOTE_ADDR");
} else
if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
$ip = $_SERVER['REMOTE_ADDR'];
} else {
$ip = "unknown";
}
return ($ip);
}
$browser = $_SERVER["HTTP_USER_AGENT"]; $time=$date = (new DateTime())->setTimeZone(new DateTimeZone('America/New_York'))->format('Y-m-d H:i:s');; $file=fopen("ip.txt","a+"); fwrite($file,$time." ".getip()." ".$browser." "."\n".$details->org."\n".$details->city." ".$details->region." ".$details->country."\n"); fclose($file); ?>
</body>
</html>
