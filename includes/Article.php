<?php

require_once($IP . "/includes/Parser.php");

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
    $title = getGet("page");
    if ( !$article->exsists() ) {
        $p = "This is the default article for pages without an article. Please <a href=\"index.php?page=" . $title . "&action=edit\">click here</a> to make this article!";
    }
    echo "<h1>" . $article->getTitle . "</h1>";
    echo $p;
    return array($title, $p);
}

function renderLogin() {
    /* Function for rendering login. 
     * TODO: Make login work and move to own module. */
    require_once($IP . "/data/login.xml");
}

function renderPage() {
    /* This function starts rendering the article. */
    $article = new Article();
    $article->setTitle(getGet("page"));
    $action = getGet("action");
    
    // TODO: New themes; remove ThemeStart and ThemeEnd functions
    ThemeStart();
    switch ($action) {
        case "login":
            renderLogin();
        default:
            renderArticle($article);
    }
    ThemeEnd();
}

?>
