<?php
class autohide_feeds extends Plugin {

	private $host;

	function about() {
		return array(1.0,
			"Auto Hide Feeds bar at launch",
			"gloony");
	}

	function init($host) {
		$this->host = $host;
	}

	function get_js() {
		return file_get_contents(__DIR__ . "/autohide_feeds.js");
	}

	function api_version() {
		return 2;
	}

}
