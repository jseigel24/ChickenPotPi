<div class="row">

<h2 class="clearfloat">Budget Management</h2>

<div class="formsec">

<h3>Sales Update</h3>
<form action="/tracker/salesupdate" method="POST">

<table>

	<tr>
		<td>Eggs Sold</td>
		<td><input type="text"name="eggssold"/></td>
	</tr>

	<tr>
		<td>Price (Per Egg)</td>
		<td><input type="text"name="eggincome"/></td>
	</tr>

	<tr>
		<td><input type="Submit"/></td>
	</tr>

</table>
</form>

</div>

<div class="formsec">

<h3>Expense Update</h3>

<form action="/tracker/expenseupdate" method="POST">

<table>

<tr>
<td>Description</td>
<td><input type="text" name=""/></td>
</tr>

<tr>
<td>Amount</td>
<td><input type="text" name="expenseamount"/></td>
</tr>

<tr>
<td>Date</td>
<td><input type="text" name="expensedate"/></td>
</tr>

<tr><td><input type="submit"/></td></tr>
</table>
</form>

</div>
</div>

<div class="row">
	<div class="row"><h2>Profit/Loss</h2></div>
        <div class="row">Total Expenses: $<?=InfoOutput::getExpenseAmount()?></div>
        <div class="row">Total Sales: $<?=InfoOutput::getSalesAmount() ?></div>
        <div class="row">Net Profit: $<?=InfoOutput::getNetProfit() ?></div>
</div>

<div class="row">
	<div class="row"><h2>Line Items</h2></div>
	<div class="formsec">
	<div class="row">
		<div class="span1">ID</div>
		<div class="span5">Description</div>
		<div class="span2">Price</div>
		<div class="span2">Date</div>
	</div>
<?php foreach($line as $l) {
	?><div class="row" id="line_<?=$l['id']?>>
		<div class="span1"><?=$l['id']?></div>
		<div class="span5"><?=$l['description']?></div>
		<div class="span2">$<?=$l['price']?></div>
		<div class="span2"><?=$l['date']?></div>
	</div><?php
} ?>
	</div>
</div>
</div>
