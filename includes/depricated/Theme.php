<?php

interface Theme {
    /* Anyone who implements this interface can be qualified as a theme or
     * skin, or in other words, someone who draws all the pretty stuff around
     * the border of the actual content. */
    public function init();
    public function run();
    public function update();
    public function done();
    public function drawAll();
    public function drawBeforeContent();
    public function drawAfterContent();
}
