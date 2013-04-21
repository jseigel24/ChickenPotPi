<?php

class Site {

	public static function MainPage() {
		getTemplatE()->display('header.php');
		getTemplate()->display('MainPage.php');
		getTemplate()->display('footer.php');
	}

	public static function Tracker() {
		getTemplate()->display('header.php');
		getTemplate()->display('Tracker.php');
		getTemplate()->display('footer.php');
	}

	public static function Education() {
		getTemplate()->display('header.php');
		getTemplate()->display('Education.php');
		getTemplate()->display('footer.php');
	}

	public static function Weather() {
		$w = new Weather();
		$params = array('w'=>$w);
		getTemplate()->display('header.php');
		getTemplate()->display('Weather.php', $params);
		getTemplate()->display('footer.php');
	}

	public static function Output() {
		$params = array();
		$ex = InfoOutput::getExpenses();
		$s = InfoOutput::getSales();
		$f = InfoOutput::getFeed();
		$e = InfoOutput::getEgg();
		$b = InfoOutput::getBird();

		$params = array('ex'=>$ex, 
				's'=>$s,
				'f'=>$f,
				'e'=>$e,
				'b'=>$b);
		getTemplate()->display('header.php');
		getTemplate()->display('Output.php', $params);
		getTemplate()->display('footer.php');
	}
}
