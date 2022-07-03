<?php
system('clear');
function banner()
{
echo "\e[1;33m
   ___      ___               _____             __          
  / _ \___ / _/__ ________   / ___/______ ___ _/ /____  ____
 / // / -_) _/ _ `/ __/ -_) / /__/ __/ -_) _ `/ __/ _ \/ __/
/____/\__/_/ \_,_/\__/\__/  \___/_/  \__/\_,_/\__/\___/_/   
\e[0;01m\n";
}


echo banner();
sleep(2);
echo "\e[1;31mMade by Ph.Kido - SkidSec Philippines\e[0;01m\n\n";
sleep(5);
echo "\e[1;33mCodename\e[0;01m : "; $name = trim(fgets(STDIN));
echo "\e[1;33mTitle\e[0;01m : "; $title = trim(fgets(STDIN));
echo "\e[1;33mYour Word\e[0;01m : "; $word = trim(fgets(STDIN));
echo "\e[1;33mImage Link\e[0;01m : "; $img = trim(fgets(STDIN));
echo "\e[1;33mColor\e[0;01m : "; $color = trim(fgets(STDIN));
echo "\e[1;33mAudio Link\e[0;01m : "; $audio = trim(fgets(STDIN));
echo "\e[1;33mGreeting To\e[0;01m : "; $greet = trim(fgets(STDIN));
sleep(2);

echo "\n\n\e[1;31mPlease waiting...\e[0;01m\n\n\n";
sleep(5);
system('clear');

?>

<!doctype html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<link rel="icon" href="https://a.top4top.io/p_23719re410.png" type="x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Combo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">

body{

background-image:url(https://64.media.tumblr.com/f816c9430a4851bb196e559ade3a99ad/tumblr_paqhc18jmD1xp1j77o1_640.gif);
position:fixed;
margin:auto;
height:100%;
top:0;
bottom:0;
left:0;
right:0

}
</style>

<body>
<body style="color:#fff; margin:0; font-family: 'Combo', sans-serif; height:100%; background-color:#000;">
<div style="height:auto; min-height:100%;">
<div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 20%; left:50%;">

<audio src="<?php echo $audio; ?>" loop="1" autoplay="1"></audio>
<img draggable="false" src="<?php echo $img; ?>" width="300" height="300">

<h2>Hacked by <font color="<?php echo $color; ?>"><?php echo $name; ?></font></h2>
<h4><?php echo $word; ?></h4>
<br>
<hr color="<?php echo $color; ?>">
<p><?php echo $greet; ?></p>
<hr color="<?php echo $color; ?>" width="70%">
</body>
</html>

<?php

echo "\e[1;31mSave as index.html\nThank you for using this tool ^_^\n";


?>
