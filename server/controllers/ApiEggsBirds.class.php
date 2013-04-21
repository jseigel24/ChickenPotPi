<?php

class ApiEggsBirds {

	public static function totaleggs() {
		if(!ApiAuth::tokenCheck())
			return response(400);
	}
	
	public static function totalbirds() {
		echo "total birds";
	}
	
	public static function eggsfertilized() {
		if(!ApiAuth::tokenCheck())
			return response(400);

		getDatabase()->execute('INSERT INTO egg(fertilized) VALUES(:f)', array(':f' => $_POST['fert']));
		return response(200);
	}

	public static function eggsunfertilized() {
		if(!ApiAuth::tokenCheck())
                        return response(400);
		getDatabase()->execute('INSERT INTO egg(fertilized');
	}

	public static function update_fertilized() {
		echo "update fertilized";
	}

	public static function update_unfertilized() {
		echo "update unfertilized";
	}

}
