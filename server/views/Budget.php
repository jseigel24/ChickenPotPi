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
<td><input type="text" name="description"/></td>
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



<div class="clearfloat"></div>
<div class="row">
	<div class="row"><h2>Profit/Loss</h2></div>
        <div class="row">Total Expenses: $<?=InfoOutput::getExpenseAmount()?></div>
        <div class="row">Total Sales: $<?=InfoOutput::getSalesAmount() ?></div>
        <div class="row">Net Profit: $<?=InfoOutput::getNetProfit() ?></div>
</div>

<div class="formsec2">
	
	
	<h2>Expenses Line Items</h2>
<table>	
<tr>
		<td>id</td>
		<td>description</td>
		<td>price</td>
		<td>date</td>
	</tr>

<?php foreach($expenses as $l) {?>

<tr>
<td><?=$l['id']?></td>
<td><?=$l['description']?></td>
<td><?=$l['price']?></td>
<td><?=$l['date']?></td>
</tr>

</table>
<?php
} ?>



<hr/>
<hr/>


<div class="formsec2">
<div class="rowj">
	<div class="rowj"><h2>Sales Line Items</h2></div>
	<div class="rowj">
		<div class="span1j">id</div>
		<div class="span5j">description</div>
		<div class="span2j">price</div>
		<div class="span2j">date</div>
	</div>
<?php foreach($sales as $l) {
	?><div class="rowj" id="line_<?=$l['id']?>">
		<div class="span1j"><?=$l['id']?></div>
		<div class="span5j"><?=$l['description']?></div>
		<div class="span2j">$<?=$l['price']?></div>
		<div class="span2j"><?=$l['date']?></div>
	</div><?php
} ?>
</div>

</div>

</div>
