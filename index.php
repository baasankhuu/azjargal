<?php 
//Comment viral script By Haris Khan 
// Don't try to remove link etc from this script else it won't work
include 'title.php';
$rand=rand(0,9);
if($rand=='1')
	$title=$m1;
else if($rand=='2')
	$title=$m2;
else if($rand=='3')
	$title=$m3;
else if($rand=='4')
	$title=$m4;
else if($rand=='5')
	$title=$m5;
else if($rand=='6')
	$title=$m6;
else if($rand=='7')
	$title=$m7;
else if($rand=='8')
	$title=$m8;
else if($rand=='9')
	$title=$m9;
else if($rand=='0')
	$title=$m0;
?>
<?php
//getting name By Haris KHan 
preg_match("/[^\/]+$/", "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", $matches);
$last_word = $matches[0];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>

  <title><?php echo $last_word ?> <?php echo $title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="twitter:card" value="summary">
<meta property="og:description" content="Энд дарж өөрийгөө үзнэ үү"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $last_word ?> <?php echo $title;?>" />
<meta name="og:image" content="<?php echo $url;?>/images/<?php echo $rand;?>.jpg">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<style>body {
    background-color: yellow;
}</style>
<style> 
 .preview {
 	width:100%;
 	Color:red;
 	Padding:10px;
 }
 .preview h2 {

 	padding-top: 10px;
 	padding-bottom: 10px;
 	width:400px;
 	height: auto;
 	background-color:red;
 	border-radius: 5px;
 	color:white;
 	margin:auto;
 	border-color: black;
 	border
 }
 .preview img{
 	-webkit-box-shadow: 2px 25px 46px -2px rgba(240,48,74,0.66);
-moz-box-shadow: 2px 25px 46px -2px rgba(240,48,74,0.66);
box-shadow: 2px 25px 46px -2px rgba(240,48,74,0.66)
 	padding-top: 20px;
 	width:400px;
 	height: auto;
 	background-color: red;
 	margin:auto;
 	border-radius: 10px;

 }
 footer a {
 	color:red;
 	font-size: 18px;
 	width:300px;
 	text-align: center;

 }
</style>

 </head> <body>

<script>
/*setTimeout(function () {
window.location.href = "http://niitiin.com/";
},100);
</script>
 <div class="preview">
                  <h2 align="center"><?php echo $last_word ?> <?php echo $title;?></h2>
                   <center><img align="middle" width="200" height="auto"src="images/<?php echo $rand;?>.jpg" alt="/images/<?php echo $rand;?>.jpg" title="edit/images/<?php echo $rand;?>.jpg" /> </center>
 </div>
                 <center> <a href="http://niitiin.com/">Developed By Niitiin.COM</a> </center>
</body>