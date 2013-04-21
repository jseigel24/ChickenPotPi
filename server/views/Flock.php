<div class="formsec">
<h3></h3>
<form action="/tracker/birdupdate" method="POST">

<h3>New Bird</h3>
<table>
        <tr>
                <td> Breed </td>
                <td><input type="text" name="breed" /></td>
        </tr>

	<tr>	<td>Gender</td>
		<td><select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		   </select>
		</td>
	</tr> 


	<tr>
                <td>Name</td>
                <td><input type="text" name="name" /></td>
        </tr>

	
        <tr>
                <td>Age</td>
                <td><input type="text" id="=age" /></td>
        </tr>

        <tr>
                <td>Weight</td>
                <td><input type="text" id="weight" /></td>
        </tr>

	<tr><td><input type="submit"/></td></tr>


</table>
</form>

</div>

<div class="formsec">

<h3>Current Flock</h3>



	<h4>Birds</h4>




        <h4> Eggs</h4>
        <div>
                Total Number of Eggs: <?= InfoOutput::getTotalEggs() ?>
        </div>
        <div>
                Fertilized: <?= InfoOutput::getTotalFertilized() ?><br />
                Unfertilized:<?= InfoOutput::getTotalUnfertilized()?>
        </div>

        <div>
                Total number of chickens: <?=InfoOutput::getTotalBirds()?>
        </div>



</div>
