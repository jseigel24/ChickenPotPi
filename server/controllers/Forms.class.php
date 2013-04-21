<?php

class FormSubmit {

	public static function eggslaid() {
		$eggslaid = $_POST['eggsin'];
		$ferteggs = $_POST['ferteggs'];
		$unfert = $eggslaid - $ferteggs;
		$laydate = $eggslaid;
		getDatabase()->execute("INSERT INTO egg(fertilized, number) VALUES('$eggslaid', '$unfert')");
	}

	public static function salesupdate() {
		$eggssold = $_POST['eggssold'];
		$saledate = $_POST['saledate'];
		$eggincome = $_POST['eggincome'];
		getDatabase()->one ("INSERT INTO sales(date, number, price) VALUES('$saledate', '$eggssold', '$eggincome')");
	}

	public static function expenseupdate() {
		$description = $_POST['description'];
                $amount = $_POST['expenseamount'];
		$date = $_POST['expensedate'];
		getDatabase()->one ("INSERT INTO expense(date, description, amount) VALUES('$date', '$description','$amount')");
	}


/*	public static function birdupdate() {
		$=$_POST[''];
		$=$_POST[''];
		getDatabase()->one ("INSERT INTO expense(date, ) VALUES('$', '$','$')");

	}
*/
}

