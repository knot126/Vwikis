<?php

require_once($IP . "/includes/Request.php");
require_once($IP . "/includes/Action.php");

class Article {
    private $mTitle;
    private $mContent;
    private $mExsists;
    
    function load() {
        $this->mExsists = false;
        return $mContent;
    }
    
    function exsists() {
        return $this->mExsists;
    }
    
    function setTitle($newTitle) {
        $this->mTitle = $newTitle;
    }
    
    function getTitle() {
        return $this->mTitle;
    }
}

function renderArticle(Article $article) {
    /* Render the article content. 
     * Currently a dummy function. */
    ThemeStart();
    $title = wfGet("page");
    echo "<h1>" . $article->getTitle() . "</h1>";
    if ( !$article->exsists() ) {
        $p = "This is the default article for pages without an article. Please <a href=\"index.php?page=" . $title . "&action=edit\">click here</a> to make this article!";
    }
    echo $p;
    ThemeEnd();
    return array($title, $p);
}

function renderForm(string $action) {
    /* Function for rendering login. 
     * TODO: Make login work and move to own module. */
    global $IP;
    
    switch ($action) {
        case "login":
            require($IP . "/data/xml/login.xml");
            
        default:
            
    }
}

function renderPage() {
    /* This is the "real" main function, which takes the user input. */
    global $wgDebugMessages;
    $article = new Article();
    
    $article->setTitle(wfGet("page"));
    $action = wfGet("action");
    
    if ($action) {
        doAction($action);
    } else {
        
        // Debug message for article title notification
        if ($wgDebugMessages) {
            $x = $article->getTitle();
            echo "<b>Note:</b> Current article title is $x.<br/>";
        }
        
        // Decide where the user should go (login is a special page)
        if ($article->getTitle() == "login") {
            renderForm($article->getTitle());
        } else {
            renderArticle($article);
        }
    }
}
