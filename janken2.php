<DOCTYPE html PUBLC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" contents="text/html; charset=UTF-8"/>

<title>php学習</title>
</head>

<body>
<?php 
$player = array('0','5','0','2','5');//自分　5回分のジャンケン
$rival = array('5','2','0','5','0');//敵　5回分のジャンケン
$win = 0;//勝ち負けは、0から加算する
$lose = 0;
?>

<?php 

 for($i = 0,$j = 0;$i <  count($player),$j < count($rival);
 $i++,$j++){ //配列の数だけループ処理
    if(($player[$i] == 0)&&($rival[$j] == 2)){ //変数[]で、配列の順番に基づく要素を指定。条件分岐で勝敗を加算する。
   $win++;}
    else if(($player[$i] == 2)&&($rival[$j] == 5)){
   $win++;}
    else if(($player[$i] == 5)&&($rival[$j] == 0)){
   $win++;}
    else if(($player[$i] == 0)&&($rival[$j] == 5)){
   $lose++;}
    else if(($player[$i] == 2)&&($rival[$j] == 0)){
   $lose++;}
    else if(($player[$i] == 5)&&($rival[$j] == 2)){
   $lose++;}
 }
?>
<?php
  print($win.'勝'.$lose.'敗');//変数と文字列の結合
?>
</body>

</html>