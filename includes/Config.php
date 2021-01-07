<?php

class Config {
	private $conffile;
	private $content;
	
	public function __construct($filename = "Config") {
		$this->conffile = fopen($IP . "/" . $filename . ".json", "r+");
		$this->content = fread($this->conffile, filesize($IP . "/" . $filename . ".json"));
		$this->content = json_decode($this->content, true);
	}
	
	public function get($i) {
		return $this->content[$i];
	}
	
	public function set($i, $x) {
		$this->content[$i] = $x;
		return $i;
	}
	
	public function __destruct() {
		$this->content = json_encode($this->content);
		fwrite($this->conffile, $this->content);
		fclose($this->conffile);
	}
}
