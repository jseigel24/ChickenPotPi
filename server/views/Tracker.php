<h2> Egg Stock Update</h2>

<form action="/tracker/eggslaid" method="POST">

<table>

<tr><td>Eggs laid</td><td><input type="text" name="eggsin"/></td></tr>

<tr><td>Fertilized eggs collected</td><td><input type="text" name="ferteggs"</td></tr>


<tr><td>
<input type="submit"/><input type="checkbox" value="true" name="fed"/>Birds Fed?
</td></tr>


</table>
</form>

<hr/>


<h2>Sales Update</h2>
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

<tr><td><input type="Submit"/></td></tr>

</table>
</form>

<hr/>

<h2>Expense Update</h2>

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


<hr/>