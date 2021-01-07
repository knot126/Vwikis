<?php

function wfMain() {
    /* Not to be confused with wfRun() in Igniter.php */
    $action = wfGet("action");
    
    wfHandleAction($action);
}
