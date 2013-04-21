<?php

class InfoOutput {

        public static function getExpenses() {
		$ex = getDatabase()->all("SELECT * FROM expense WHERE 1 ORDER BY date DESC");
		return $ex;
	}

	public static function getSales() {
		$s = getDatabase()->all("SELECT * FROM sales WHERE 1 ORDER BY date DESC");
		return $s;
	}

	public static function getFeed() {
		$f = getDatabase()->all("SELECT * FROM feed WHERE 1 ORDER BY id ASC");
		return $f;
	}

	public static function getEgg() {
		$e = getDatabase()->all("SELECT * FROM egg WHERE 1 ORDER BY id ASC");
		return $e;
	}
	
	public static function getBird() {
		$b = getDatabase()->all("SELECT * FROM bird WHERE 1 ORDER BY id ASC");
		return $b;
	}

	public static function getTotalEggs() {
		$e = self::getEgg();
		$total = 0;
		foreach($e as $f) {
			$total = $f['number'] + $total;
		}
		return $total;
	}

	public static function getTotalFertilized() {
		$e = self::getEgg();
		$total = 0;
		foreach($e as $f) {
			if($f['fertilized']) {
				$total = $f['number'] + $total;
			}
			else {
				continue;
			}
		}
		return $total;
	}

	public static function getTotalBirds() {
		$b = self::getBird();
		$total = 0;
		foreach($b as $a) {
			$total++;
		}
		return $total;
	}
}
