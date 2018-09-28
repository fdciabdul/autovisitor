<?php
echo ' Username Facebook: ';
$url = trim(fgets(STDIN));
echo ' Username Facebook: ';
$max = trim(fgets(STDIN));

require("autovisitor.class.php");

for($i = 1; $i < $max+1; $i++) {
	$class = new autovisitor($url);
	echo $i.". SUKSES - [".$class->jalankan()."\n";
}
?>

<body><?php 
include('auth/startup.php');
include('data/data-functions.php');
//SITE SETTINGS
list($meta_title, $meta_description, $site_title, $site_email) = all_settings();
include('assets/comp/header.php');