<?php

$_SESSION = array();

if (session_id()) {
    session_unset();
    unset($_SESSION);
    session_destroy();
    session_write_close();
    // session_regenerate_id(true);
    // setcookie(session_name(),'',0,'/');
}

?>
