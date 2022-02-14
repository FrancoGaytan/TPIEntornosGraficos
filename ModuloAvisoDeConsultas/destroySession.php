<?php

if (session_id()) {
    session_unset();
    session_destroy();
    session_write_close();
    session_regenerate_id(true);
    // setcookie(session_name(),'',0,'/');
}

?>