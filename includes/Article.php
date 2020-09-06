<?php

require_once($IP . "/includes/Parser.php");
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
        return $mExsists;
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
    if ( !$article->exsists() ) {
        $p = "This is the default article for pages without an article. Please <a href=\"index.php?page=" . $title . "&action=edit\">click here</a> to make this article!";
    }
    echo "<h1>" . $article->getTitle . "</h1>";
    echo $p;
    ThemeEnd();
    return array($title, $p);
}

function renderForm($action) {
    /* Function for rendering login. 
     * TODO: Make login work and move to own module. */
    global $IP;
    
    require_once($IP . "/data/xml/login.xml");
}

function renderPage() {
    /* This is the "real" main function, which takes the user input. */
    $article = new Article();
    
    $article->setTitle(wfGet("page"));
    $action = wfGet("action");
    
    // TODO: New themes; remove ThemeStart and ThemeEnd functions
    if ($action) {
        doAction($action);
    } else {
        renderArticle($article);
    }
}

?>
