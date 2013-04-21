<?php

class Errors {

	public static function _404() {
		echo "<h1>404: Not Found</h1>";
		echo "<br /><br />";
		echo "Path: http://54.243.207.123/".$_REQUEST['__route__'];
	}

}

function response($code) {
	echo $code;
}
