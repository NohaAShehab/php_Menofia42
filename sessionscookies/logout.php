<?php

    echo "Logging out >>>>>>>>>>>>";

    session_start();
    session_destroy();  # I need nologer need to keep this userdata --->
        #   remove session file  from the server
    setcookie("PHPSESSID", "", time()-3600, "/","localhost",0,0);

