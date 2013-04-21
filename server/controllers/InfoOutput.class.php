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

	public static function getTotalBirds() {
		$b = self::getBird();
		return count($b);
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

	public static function getTotalUnfertilized(){
		$e = self::getEgg();
		$total = 0;
		foreach($e as $u) {
			if($u['fertilized'] == 0) {
				$total = $u['number'] + $total;
			}
			else {
				continue;
			}
		}
		return $total;
	}

	public static function getLastFed() {
		$r = getDatabase()->one("SELECT * FROM feed WHERE 1 ORDER BY lastfed DESC LIMIT 1");
		return $r['lastfed'];
	}

	public static function totalFeed() {
		$r = getDatabase()->all("SELECT * FROM feed WHERE 1");
		$total = 0;
		foreach($r as $f) {
			$total = $f['amount'] + $total;
		}
		return $total;
	}

	public static function getExpenseAmount() {
		$e = self::getExpenses();
		$total = 0;
		foreach($e as $x) {
			$total = $x['price'] + $total;
		}
		return ($total/10);
	}
	public static function getSalesAmount() {
		$s = self::getSales();
		$total = 0;
		foreach($s as $x) {
			$total = $x['price'] + $total;
		}
		return ($total/10);
	}

	public static function getNetProfit() {
		$s = self::getSalesAmount();
		$e = self::getExpenseAmount();

		return ($s-$e);
	}

	public static function getLineItems() {
		$e = getDatabase()->all("SELECT * FROM expense WHERE 1 ORDER BY id ASC");
		$s = getDatabase()->all("SELECT * FROM sales WHERE 1 ORDER BY id ASC");

		return array('expenses'=>$e, 'sales'=>$s);
		
	}
}
