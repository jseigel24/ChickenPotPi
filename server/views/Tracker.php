<h2> Flock Management</h2>

<h3> Egg Stock Update</h3>

<form action="/tracker/eggslaid" method="POST">

<table>

<tr><td>Eggs laid</td><td><input type="text" name="eggsin"/></td></tr>

<tr><td>Fertilized eggs collected?</td>
<td><select name="ferteggs">
	<option value="0">No</option>
	<option value="1">Yes</option>
</select></tr>


<tr><td>
<input type="submit"/><br/>
<input type="checkbox" value="true" name="fed"/>Birds Fed?
</td></tr>


</table>
</form>

<h3></h3>
<form action="/tracker/birdupdate" mwthod="POST">

<h4>New Bird</h4>
<table>
	<tr>
		<td>Date Acquired</td>
		<td><input type="text" id="datepicker" /></td>
	</tr>


<h4>Current Birds</h4>
<!--Echo out Bird Info here-->

</table>


<hr/>



<h2>Budget Management</h2>

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

</table>
</form>

