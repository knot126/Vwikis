<?php

class UserInterfaceModule implements Module {
    private $mIsDone;
    
    public function __construct() {
        $mIsDone = false;
    }
    
    public function init() {
        $this->__construct();
    }
    
    public function run() {
        if (!$this->mIsDone) {
            GeneratePageContent();
        }
    }
    
    public function update() {
        if (!$this->mIsDone) {
            GeneratePageContent();
        }
    }
    
    public function done() {
        return $this->mIsDone;
    }
}

$UserInterface = new UserInterfaceModule();

function GeneratePageContent() {
    global $IP, $wgOutput, $wgPage;
    
    $headerPath = $IP . "/modules/UserInterface/xml/header.xml";
    $footerPath = $IP . "/modules/UserInterface/xml/bar.xml";
    
    $header = fopen($headerPath, "r");
    $footer = fopen($footerPath, "r");
    
    $wgOutput->append(fread($header, filesize($headerPath)));
    $wgOutput->append($wgPage->getTitle());
    $wgOutput->append($wgPage->get());
    $wgOutput->append("</div>");
    $wgOutput->append(fread($footer, filesize($footerPath)));
    $wgOutput->append("</div>");
    $wgOutput->append("</body></html>");
    
    fclose($header);
    fclose($footer);
}

wfRegisterAction("read", $UserInterface);
