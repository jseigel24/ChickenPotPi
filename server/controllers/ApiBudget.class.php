<?php

class ApiBudget {

	public static function all() {
		echo "entire budget";
	}

	public static function balance_get() {
		echo "balance";
	}

	public static function sales_get() {
		echo "sales";
	}

	public static function sales_post() {
		echo "new sale";
	}

	public static function sales_getone() {
		echo "single sale";
	}

	public static function sales_update() {
		echo "update one sale";
	}

	public static function sales_delete() {
		echo "delete sale";
	}

}
