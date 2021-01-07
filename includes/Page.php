<?php

class OutputPage {
    /* OutputPage Factory 
     * This factory will produce the content of the working page by the end of
     * it's lifetime. This should only be used by themes and skins. For regular
     * modules, please see the Page class. */
    
    // Page content
    private $mContent;
    
    // Message queue
    private $mMessages;
    
    public function __construct() {
        /* Creates the variables needed by the object. */
        $this->mContent = "";
        $this->mMessages = array();
    }
    
    public function append(string $appendage) {
        /* Helper method to append content. */
        $this->mContent = $this->mContent . $appendage;
    }
    
    public function render() : void {
        /* Render the page. */
        echo $this->mContent;
    }
    
    public function getConent() : string {
        /* Return the content of the page. */
        return $this->mContent;
    }
    
    public function discard() : void {
        /* Discard of the page content. */
        $this->mContent = "";
    }
    
    public function addOpeningTag() : void {
        /* Helper function to add opening HTML tag */
        $this->mContent = $this->mContent . "<html>";
    }
    
    public function addClosingTag() : void {
        /* Helper function to add opening HTML tag */
        $this->mContent = $this->mContent . "</html>";
    }
    
    public function addMessage(string $type, string $message) : void {
        /* This will add a formatted message to the output. */
        array_push($this->mMessages, "<b>$type:</b> $message");
    }
    
    public function insertMessage(string $type, string $message) : void {
        /* Forcefully append a message to the page output. No gaurentte where 
         * the mssage will end up displaying. */
        $this->mContent = $this->mContent . "<b>$type:</b> $message";
    }
    
    public function displayMessages() : void {
        /* Adds the messages in the queue to the output. */
        foreach($this->mMessages as $msg) {
            $this->mContent = $this->mContent . $msg;
        }
        $mMessages = array();
    }
}

class WikiPage {
    /* WikiPage Factory
     * This should control the content that the user actually cares about, 
     * which is on the main part of the page. */
    
    private $mContent;
    private $mShowSidebar;
    
    public function __construct() {
        /* Wikipage content constructor */
        $this->mContent = "";
        $this->mShowSidebar = true;
    }
    
    public function append(string $appendage) {
        /* Append some content to the page output. */
        $this->mContent = $this->mContent . $appendage;
    }
    
    public function clear() {
        /* Wipe the page content */
        $this->mContent = "";
    }
    
    public function get() {
        /* Get the current page output. */
        return $this->mContent;
    }
    
    public function set(string $set) {
        /* Set the page output to this content. */
        $this->mContent = $set;
    }
    
    public function disableSidebar() {
        /* Disable the sidebar. */
        $this->mShowSidebar = false;
    }
    
    public function shouldShowSidebar() {
        /* Get the status of showing the sidebar or not showing it. */
    }
}
