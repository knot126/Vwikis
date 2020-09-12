<?php

class OutputPage {
    /* Page Factory 
     * This factory will produce the content of the working page by the end of
     * it's lifetime. */
    
    private $mContent;
    private $mMessages;
    
    function __construct() {
        /* Just creates the page content. */
        $this->mContent = "";
    }
    
    function append(string $appendage) {
        /* Helper method to append content. */
        $this->mContent = $this->mContent . $appendage;
    }
    
    function render() : void {
        /* Render the page. */
        echo $this->mContent;
    }
    
    function getConent() : string {
        /* Return the content of the page. */
        return $this->mContent;
    }
    
    function discard() : void {
        /* Discard of the page content. */
        $this->mContent = "";
    }
    
    function addOpeningTag() : void {
        /* Helper function to add opening HTML tag */
        $this->mContent = $this->mContent . "<html>";
    }
    
    function addClosingTag() : void {
        /* Helper function to add opening HTML tag */
        $this->mContent = $this->mContent . "</html>";
    }
    
    function addMessage(string $type, string $message) : void {
        /* This will add a formatted message to the output. */
        $this->mContent = $this->mContent . "<b>$type:</b> $message";
    }
    
    function insertMessage(string $type, string $message) : void {
        /* Forcefully append a message to the page output. No gaurentte where 
         * the mssage will end up displaying. */
        $this->mContent = $this->mContent . "<b>$type:</b> $message";
    }
    
    function addMessages() : void {
        /*  */
    }
}
