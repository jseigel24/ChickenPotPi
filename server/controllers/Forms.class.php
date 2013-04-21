<?php

class FormSubmit {

	public static function eggslaid() {
		$eggslaid = $_POST['eggsin'];
		$ferteggs = $_POST['ferteggs'];
		$unfert = $eggslaid - $ferteggs;
		$laydate = $eggslaid;
		getDatabase()->execute("INSERT INTO egg(fertilized, number) VALUES('$eggslaid', '$unfert')");

	getRoute()->redirect('/flock');
	}

	public static function salesupdate() {
		$eggssold = $_POST['eggssold'];
		$eggincome = $_POST['eggincome'];
		getDatabase()->execute("INSERT INTO sales(date, quantity, price) VALUES('$saledate', '$eggssold', '$eggincome')");



	getRoute()->redirect('/budget');
	}

	public static function expenseupdate() {
		$description = $_POST['description'];
                $amount = $_POST['expenseamount'];
		$date = $_POST['expensedate'];
		getDatabase()->execute("INSERT INTO expense(description, price) VALUES('$description','$amount')");


	getRoute()->redirect('/budget');
	}


	public static function birdupdate() {
		$breed = $_POST['breed'];
		$gender =$_POST['gender'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$weight = $_POST['weight'];
		getDatabase()->execute("INSERT INTO bird(gender, name, age, breed, weight)
					VALUES('$gender','$name','$age','$breed','$weight')");
	getRoute()->redirect('/flock');

	}

}

