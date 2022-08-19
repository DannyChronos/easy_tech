<?php
    $request=$_SERVER["REQUEST_URI"];

    if ($request=="/") {
        require_once("../controller/home");
    }
    else{
        echo("<h1> Page en cours </h1>");
    }