<?php

class WikiError {
    private $mType;
    private $mMessage;
    
    function doError() {
        echo $this->mMessage . "<br/>";
    }
}

function wfError(string $message = "", bool $die = false) {
    echo $message . "<br/>";
    if ($die) {
        exit(1);
    }
}
