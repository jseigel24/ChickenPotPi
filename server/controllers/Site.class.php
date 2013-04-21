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

	public static function Flock() {
		getTemplate()->display('header.php');
		getTemplate()->display('Flock.php');
		getTemplate()->display('footer.php');
	}

	public static function Budget() {
		
		getTemplate()->display('header.php');
		getTemplate()->display('Budget.php');
		getTemplate()->display('footer.php');
	}

	public static function Weather() {
		
		$w = new Weather();
		
	/*	if(!is_connected()) {
			$w->current_conditions['info'] = 'You are not connected to the internet, and I cannot access weather data!';
			$w->current_conditions['temp_f'] = 'N/A';
			$w->current_conditions['feelslike'] = 'N/A';
			$w->current_conditions['humidity'] = 'N/A';
			$w->current_conditions['wind_speed'] = 'N/A';
			$w->current_conditions['wind_gust'] = 'N/A';
			$w->current_conditions['forecast'] = 'N/A';
		}
*/
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
