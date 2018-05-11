
<!DOCTYPE html>
<html>
<head>
	<title>project one</title>
<link rel="stylesheet" type="text/css" href="two.css">
</head>
<body>
<h1>Welcome <a style="color: #E8D1D1; text-align: right; float:right; font-family:courier " id="clock"> </a> <br > &emsp; &emsp; to <br>HNG Internship </h1>

</body>
</html>
<?php
date_default_timezone_set('UTC');
?>
<script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  mins = (mins < 10 ? "0" : "") + mins;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ""  + apm;
  document.getElementById("clock").firstChild.nodeValue = ctime;
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>
