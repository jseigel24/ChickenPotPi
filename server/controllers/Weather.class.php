<?php

class Weather {

	private $state;
	private $country;
	private $city;
	public $current_conditions = array();
	public $currency;
	private $token = 'a22c9351ae35491c';


	function __construct() {
		$geoip = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
		$this->state = $geoip['geoplugin_city'];
		$this->city = $geoip['geoplugin_region'];
		$this->country = $geoip['geoplugin_countryCode'];
		$this->currency = $geoip['geoplugin_currencySymbol'];

		$this->getConditions($geoip['geoplugin_city'], $geoip['geoplugin_region']);

	}

	private function getConditions($city, $state) {
		$r = getDatabase()->one('SELECT * FROM weather WHERE 1 ORDER BY timegotten DESC');
		if($r['timegotten'] < ( time() - 600)) {
			$json = file_get_contents('http://api.wunderground.com/api/'.$this->token.'/conditions/q/'.$state.'/'.$city.'.json');
			getDatabase()->execute('INSERT INTO weather(weather_json, timegotten) VALUES(:wj, :t)', array(':wj'=>$json, ':t'=>time()));	
			$this->saveConditions($json);
		}
		else {
			$this->saveConditions($r['weather_json']);
		}
	}

	private function saveConditions($json) {
		$w = json_decode($json, true);
		$this->current_conditions['last_update'] = $w['current_observation']['observation_time'];
		$this->current_conditions['humidity'] = $w['current_observation']['relative_humidity'];
		$this->current_conditions['temp_f'] = $w['current_observation']['temp_f'];
		$this->current_conditions['temp_c'] = $w['current_observation']['temp_c'];
		$this->current_conditions['wind_dir'] = $w['current_observation']['wind_dir'];
		$this->current_conditions['wind_speed'] = $w['current_observation']['wind_mph'];
		$this->current_conditions['wind_gust'] = $w['current_observation']['wind_gust_mph'];
		$this->current_conditions['wind_chill'] = $w['current_observation']['windchill_f'];
		$this->current_conditions['feelslike'] = $w['current_observation']['feelslike_f'];
		$this->current_conditions['uv'] = $w['current_observation']['UV'];
		$this->current_conditions['precip'] = $w['current_observation']['precip_today_in'];
		$this->current_conditions['forecast'] = $w['current_observation']['forecast_url'];
	}
	

	public static function getLogo() {
		$args = func_get_args();
		if(is_string($args[0])) {
			switch($args[0]) {
				case 'medium':
				 
				break;

				case 'large':

				break;

				default:
				case 'small':

				break;
			}
		}
		else {
			$w = $args[0];
			$h = $args[1];
		}

		return '<a href="http://www.wunderground.com/"><img src="/assets/img/wundergroundLogo_4c_horz.jpg" width="'.$w.'" height="'.$h.'" alt="Weather Provided By Wunderground.com" /></a>';

	}

	
}
