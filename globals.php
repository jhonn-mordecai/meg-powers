<?php

if (substr($_SERVER["SERVER_ADDR"], 0, 7) == "192.168" || $_SERVER["SERVER_ADDR"] == "127.0.0.1" || $_SERVER["SERVER_ADDR"] == "::1") {

    $BASE_URL = "http://localhost/meg";

} else {
    $BASE_URL = "https://megpowersdesign.com";
}

?>