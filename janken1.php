<DOCTYPE html PUBLC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" contents="text/html; charset=UTF-8"/>

<title>php学習</title>
</head>

<body>
<php 
$win = 0;
$lose = 0;
?>

<php 
 for($i = 0,$j = 0;$i <  count($player),$j < count($rival);
 $i++,$j++){
    if(($player[$i] == 0)&&($rival[$j] == 2)){
   $win++;}
    else if(($player[$i] == 2)&&($rival[$j] == 5)){
   $win++;}
    else if(($player[$i] == 5)&&($rival[$j] == 0)){
   $win++;}
    else if(($player[$i] == 0)&&($rival[$j] == 5)){
   $lose++;}
    else if(($player[$i] == 2)&&($rival[$j] == 0)){
   $lose++;}
    else (($player[$i] == 5)&&($rival[$j] == 2)){
   $lose++;}
 }
?>
<php
  print($win.'勝'.$lose.'敗');
?>
</body>

</html>