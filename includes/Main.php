<?php

function wfMain() {
    $action = wfGet("action");
    
    wfHandleAction($action);
}
